<?php

use App\Models\Media;
use App\Models\Setting;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Carbon\Carbon;

if (!function_exists('uploadMedia')) {
    function uploadMedia($file, $srcId, $srcType, $useOfFile, $authorId = null, $replaceExisting = true)
    {
        if (!$file || !$file->isValid()) {
            return null;
        }

        $extension = strtolower($file->getClientOriginalExtension());
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $originalName . '_' . time() . '.' . $extension;

        $fileSize = $file->getSize();

        $year = Carbon::now()->format('Y');
        $month = Carbon::now()->format('m');
        $folder = "uploads/medias/{$year}/{$month}";

        if (!File::exists(public_path($folder))) {
            File::makeDirectory(public_path($folder), 0775, true);
        }

        $file->move(public_path($folder), $fileName);
        $filePath = "{$folder}/{$fileName}";

        $imageExts = ['png', 'jpeg', 'jpg', 'svg', 'gif', 'webp'];
        $pdfExts = ['pdf'];

        if (in_array($extension, $imageExts)) {
            $fileType = 1;
        } elseif (in_array($extension, $pdfExts)) {
            $fileType = 2;
        } else {
            $fileType = 0;
        }

        $media = null;
        if ($replaceExisting) {
            $media = Media::where('src_type', $srcType)
                ->where('use_Of_file', $useOfFile)
                ->where('src_id', $srcId)
                ->first();
        }

        if ($media && $media->file_url && File::exists(public_path($media->file_url))) {
            File::delete(public_path($media->file_url));
        }

        if (!$media) {
            $media = new Media();
        }

        $media->src_id = $srcId;
        $media->src_type = $srcType;
        $media->use_Of_file = $useOfFile;
        $media->file_name = $fileName;
        $media->alt_text = Str::slug($originalName, '-');
        $media->caption = ucfirst($originalName);
        $media->file_url = $filePath;
        $media->file_size = $fileSize;
        $media->file_type = $fileType;
        $media->addedby_id = $authorId;
        $media->save();

        return $media;
    }
}



if(!function_exists('deleteMedia')) {
    function deleteMedia($srcId, $srcType, $useOfFile){
        $media = Media::where('src_id', $srcId)
                    ->where('src_type', $srcType)
                    ->where('use_Of_file', $useOfFile)
                    ->first();

        if (!$media) return false;

        if ($media->file_url && File::exists(public_path($media->file_url))) {
            File::delete(public_path($media->file_url));
        }

        $media->delete();

        return true;
    }
}

if (!function_exists('getMedia')) {
    function getMedia($srcId, $srcType, $useOfFile)
    {
        $media = Media::where('src_id', $srcId)
            ->where('src_type', $srcType)
            ->where('use_Of_file', $useOfFile)
            ->first();

        return $media ? $media->file_url : null;
    }
}

if(!function_exists('get_option')){

    function get_option( $option_name, $option_value = null ) {

        $return = Setting::where('option_name', $option_name)->pluck('option_value')->first();

        if( !$return )
            return $option_value;

        return $return;
        
    }
}

if(!function_exists('update_option')){
    
    function update_option($option_name, $option_value ) {
        // update if already exists - create if it doesn't
        $option = Setting::firstOrCreate(['option_name' => $option_name]);
        $option->option_value = $option_value;
        $option->save();

        return $option;

    }
}


if (!function_exists('getSectionItems')) {
    function getSectionItems($section){
        if (! $section instanceof \App\Models\ThemeSetting) {
            $section = \App\Models\ThemeSetting::find($section);
            if (! $section) return collect();
        }

        $limit = intval($section->news_limit ?? 0) ?: null;

        switch ((int) ($section->section_type ?? 0)) {

            case 2: // Latest news
                return \App\Models\News::where('status', 'active')
                    ->latest()
                    ->when($limit, fn($q) => $q->take($limit))
                    ->get();

            case 3: // Most viewed news
                return \App\Models\News::where('status', 'active')
                    ->orderBy('views', 'desc')
                    ->when($limit, fn($q) => $q->take($limit))
                    ->get();

            case 4: // Featured news
                return \App\Models\News::where('status', 'active')
                    ->where('is_featured', 1)
                    ->latest()
                    ->when($limit, fn($q) => $q->take($limit))
                    ->get();

            default: // Custom section with children
                $children = $section->homeDataIds()
                    ->whereNotNull('src_id')
                    ->with(['news' => function ($q) {
                        $q->where('status', 'active')
                          ->orderByRaw('CASE WHEN priority = 0 OR priority IS NULL THEN 999999 ELSE priority END ASC');
                    }])
                    ->get();

                $items = $children->map(fn($child) => $child->news)
                                  ->flatten()
                                  ->filter()
                                  ->values();

                return $limit ? $items->take($limit) : $items;
        }
    }
}


if (!function_exists('getHomeSections')) {
    function getHomeSections($onlyActiveSections = true)
    {
        $query = \App\Models\ThemeSetting::whereNull('parent_id');

        if ($onlyActiveSections) {
            $query->where('status', 'active');
        }

        $sections = $query->orderBy('drag', 'asc')->get();

        foreach ($sections as $section) {
            $section->items = getSectionItems($section);
        }

        return $sections;
    }
}




