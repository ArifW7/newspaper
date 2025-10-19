@extends('backend.app')
@push('title')
{{ __('Configure Pages') }}
@endpush
@push('css')
<style type="text/css">
    .catagorydiv {
        max-height: 300px;
        overflow: auto;
    }
    .catagorydiv ul {
        padding-left: 20px;
    }
    .catagorydiv ul li {
        list-style: none;
    }
</style>
@endpush

@section('content')

<div class="content-header row mb-2">
    <div class="content-header-end col-12 mb-md-0 mb-2">
        <div class="btn-group float-md-end" role="group" aria-label="Button group with nested dropdown">
            <a class="btn btn-outline-primary" href="{{route('pages')}}">BACK</a>
            <a class="btn btn-outline-primary" href="{{route('pagesCreate')}}" onclick="return confirm('Are You Want To New page?')">Add Page</a>
            <a class="btn btn-outline-primary" href="{{route('pagesEdit',$page->id)}}">
                <i class="fa-solid fa-rotate"></i>
            </a>
        </div>
    </div>
</div>

    <div class="section__content">
        <div class="container-fluid">
            <div class="row m-t-30">
                <form action="{{route('pagesUpdate',$page->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                    <h4 class="card-title">Page Edit</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control {{ $errors->has('name')?'error':'' }}" placeholder="Enter Post Name" value="{{ $page->name ?? old('name') }}" required>
                                            @if ($errors->has('name'))
                                                <div class="text-error">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Video URL</label>
                                            <input type="text" name="video_url" class="form-control {{ $errors-> has('video_url')?'error':'' }}" placeholder="Enter Video Url" value="{{ $page->video_url ?? old('video_url') }}">
                                            @if ($errors->has('video_url'))  
                                                <div class="text-error">{{ $errors->first('video_url') }}</div>
                                            @endif 
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Short Description</label>
                                            <textarea name="short_description" class="form-control {{ $errors->has('description')?'error':'' }}" rows="4" placeholder="Enter Short Description">{!! $page->short_description !!}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="text-error">{{ $errors->first('short_description') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control summernote {{ $errors->has('description')?'error':'' }}" rows="4" placeholder="Enter Description">{!! $page->description !!}</textarea>
                                            @if ($errors->has('description'))
                                                <div class="text-error">{{ $errors->first('description') }}</div>
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
                                            <label class="form-label">SEO Meta Title</label>
                                            <input type="text" name="seo_title" class="form-control {{ $errors->has('seo_title')?'error':'' }}" placeholder="Enter SEO Meta Title" value="{{ $page->seo_title ?? old('seo_title') }}">
                                            @if ($errors->has('seo_title'))
                                                <div class="text-error">{{ $errors->first('seo_title') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">SEO Meta Description</label>
                                            <textarea name="seo_description" class="form-control {{ $errors->has('seo_description')?'error':'' }}" rows="3" placeholder="Enter SEO Meta Description">{!! $page->seo_description !!}</textarea>
                                            @if ($errors->has('seo_description'))
                                                <div class="text-error">{{ $errors->first('seo_description') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">SEO Meta Keyword</label>
                                            <textarea name="seo_keyword" class="form-control {{ $errors->has('seo_keyword')?'error':'' }}" rows="3" placeholder="Enter SEO Meta Keyword">{!! $page->seo_keyword !!}</textarea>
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
                                            <input type="file" name="image" class="form-control {{$errors->has('image')?'error':''}}" />
                                            @if ($errors->has('image'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('image') }}</p>
                                            @endif
                                        </div>
                                        @if(getMedia($page->id, 4, 1))
                                        <div class="form-group">
                                            <img src="{{ asset(getMedia($page->id, 4, 1)) }}" style="max-width: 100px;">
                                            <a href="{{ route('deleteMedia', ['id' => $page->id, 'type' => 2, 'use' => 1]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                        </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="banner">Banner</label>
                                            <input type="file" name="banner" class="form-control {{$errors->has('banner')?'error':''}}" />
                                            @if ($errors->has('banner'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('banner') }}</p>
                                            @endif
                                        </div>
                                        @if(getMedia($page->id, 4, 2))
                                        <div class="form-group">
                                            <img src="{{ asset(getMedia($page->id, 4, 2)) }}" style="max-width: 100px;">
                                            <a href="{{ route('deleteMedia', ['id' => $page->id, 'type' => 2, 'use' => 2]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
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
                                                    <input class="form-check-input" type="checkbox" id="status" name="status" {{ $page->status=='active' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" {{ $page->is_featured ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="is_featured">Featured</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Published Date</label>
                                            <input type="date" name="created_at" class="form-control form-control-sm" value="{{ $page->created_at->format('Y-m-d') }}">
                                            @if ($errors->has('created_at'))
                                                <div class="text-error">{{ $errors->first('created_at') }}</div>
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
  
@endpush