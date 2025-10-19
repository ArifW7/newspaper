@extends('backend.app')
@push('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.css" rel="stylesheet">
@endpush

@section('content')
<div class="section__content">
    <div class="container-fluid">
        <div class="row m-t-30">
            <form action="{{ route('newsAction',['update',$item->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                <h4 class="card-title">News Edit</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Title</label>
                                        <input type="text" name="title" class="form-control {{ $errors->has('title')?'error':'' }}" placeholder="Enter News Title" value="{{ $item->title ?? old('title') }}" required>
                                        @if ($errors->has('title'))
                                            <div class="text-error">{{ $errors->first('title') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select name="category_id" class="form-control select2 {{ $errors->has('category_id')?'error':'' }}">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category_id'))
                                            <div class="text-error">{{ $errors->first('category_id') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Short Description</label>
                                        <textarea name="short_description" class="form-control {{ $errors->has('short_description')?'error':'' }}" rows="3" placeholder="Enter Short Description">{{ $item->short_description ?? old('short_description') }}</textarea>
                                        @if ($errors->has('short_description'))
                                            <div class="text-error">{{ $errors->first('short_description') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control summernote {{ $errors->has('description')?'error':'' }}" rows="4" placeholder="Enter Description">{!! $item->description !!}</textarea>
                                        @if ($errors->has('description'))
                                            <div class="text-error">{{ $errors->first('description') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Video URL</label>
                                        <input type="text" name="video_url" class="form-control {{ $errors->has('video_url')?'error':'' }}" placeholder="Enter Video URL" value="{{ $item->video_url ?? old('video_url') }}">
                                        @if ($errors->has('video_url'))
                                            <div class="text-error">{{ $errors->first('video_url') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                <h4 class="card-title">SEO Optimize</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label">Seo Title</label>
                                        <input type="text" name="seo_title" class="form-control {{ $errors->has('seo_title')?'error':'' }}" placeholder="Enter Meta Title" value="{{ $item->seo_title ?? old('seo_title') }}">
                                        @if ($errors->has('seo_title'))
                                            <div class="text-error">{{ $errors->first('seo_title') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Seo Description</label>
                                        <textarea name="seo_description" class="form-control {{ $errors->has('seo_description')?'error':'' }}" rows="3" placeholder="Enter Meta Description">{!! $item->seo_description !!}</textarea>
                                        @if ($errors->has('seo_description'))
                                            <div class="text-error">{{ $errors->first('seo_description') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Seo Keyword</label>
                                        <textarea name="seo_keyword" class="form-control {{ $errors->has('seo_keyword')?'error':'' }}" rows="3" placeholder="Enter Meta Keywords">{!! $item->seo_keyword !!}</textarea>
                                        @if ($errors->has('seo_keyword'))
                                            <div class="text-error">{{ $errors->first('seo_keyword') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
   
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                <h4 class="card-title">Images</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control {{ $errors->has('image')?'error':'' }}" />
                                        @if ($errors->has('image'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('image') }}</p>
                                        @endif
                                    </div>
                                     @if(getMedia($item->id, 1, 1))
                                    <div class="form-group">
                                        <img src="{{ asset(getMedia($item->id, 1, 1)) }}" style="max-width: 100px;">
                                        <a href="{{ route('deleteMedia', ['id' => $item->id, 'type' => 1, 'use' => 1]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                    </div>
                                    @endif
                                    <div class="form-group mt-3">
                                        <label for="banner">Banner</label>
                                        <input type="file" name="banner" class="form-control {{ $errors->has('banner')?'error':'' }}" />
                                        @if ($errors->has('banner'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('banner') }}</p>
                                        @endif
                                    </div>
                                    @if(getMedia($item->id, 1, 2))
                                    <div class="form-group">
                                        <img src="{{ asset(getMedia($item->id, 1, 2)) }}" style="max-width: 100px;">
                                        <a href="{{ route('deleteMedia', ['id' => $item->id, 'type' => 1, 'use' => 2]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                <h4 class="card-title">Action</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="status" name="status" value="1" {{ $item->status == 'active' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="status">Active</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1" {{ $item->is_featured ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_featured">Featured</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label class="form-label">Published Date</label>
                                        <input type="date" name="published_at" class="form-control form-control-sm" value="{{ $item->published_at ? date('Y-m-d', strtotime($item->published_at)) : '' }}">
                                        @if ($errors->has('published_at'))
                                            <div class="text-error">{{ $errors->first('published_at') }}</div>
                                        @endif
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100">💾 Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-lite.min.js"></script>

<script>
    // Release the $ shortcut to avoid conflict with CoolAdmin
    

    // Now use jQ instead of $
    jQ(document).ready(function() {
        jQ('.summernote').summernote({
            height: 250,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']]
            ]
        });
    });
</script>
@endpush

