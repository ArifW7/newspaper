@extends('backend.app')
@push('css')

@endpush

@section('content')
    <div class="section__content">
        <div class="container-fluid">
            <div class="row m-t-30">
                <form action="{{route('categoryAction',['update',$item->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" style="border-bottom: 1px solid #e3ebf3;">
                                    <h4 class="card-title">Category Edit</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control {{ $errors->has('name')?'error':'' }}" placeholder="Enter Post Name" value="{{ $item->name ?? old('name') }}" required>
                                            @if ($errors->has('name'))
                                                <div class="text-error">{{ $errors->first('name') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Parent Category</label>
                                            <select name="parent_id" class="form-control select2 {{ $errors->has('parent_id')?'error':'' }}">
                                                <option value="">Select Parent Category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $item->parent_id == $category->id ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('parent_id'))
                                                <div class="text-error">{{ $errors->first('parent_id') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control summernote {{ $errors->has('description')?'error':'' }}" rows="4" placeholder="Enter Description">{!! $item->description !!}</textarea>
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
                                            <input type="text" name="seo_title" class="form-control {{ $errors->has('seo_title')?'error':'' }}" placeholder="Enter SEO Meta Title" value="{{ $item->seo_title ?? old('seo_title') }}">
                                            @if ($errors->has('seo_title'))
                                                <div class="text-error">{{ $errors->first('seo_title') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">SEO Meta Description</label>
                                            <textarea name="seo_description" class="form-control {{ $errors->has('seo_description')?'error':'' }}" rows="3" placeholder="Enter SEO Meta Description">{!! $item->seo_description !!}</textarea>
                                            @if ($errors->has('seo_description'))
                                                <div class="text-error">{{ $errors->first('seo_description') }}</div>
                                            @endif
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">SEO Meta Keyword</label>
                                            <textarea name="seo_keyword" class="form-control {{ $errors->has('seo_keyword')?'error':'' }}" rows="3" placeholder="Enter SEO Meta Keyword">{!! $item->seo_keyword !!}</textarea>
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
                                        @if(getMedia($item->id, 2, 1))
                                        <div class="form-group">
                                            <img src="{{ asset(getMedia($item->id, 2, 1)) }}" style="max-width: 100px;">
                                            <a href="{{ route('deleteMedia', ['id' => $item->id, 'type' => 2, 'use' => 1]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
                                        </div>
                                        @endif
                                        <div class="form-group">
                                            <label for="banner">Banner</label>
                                            <input type="file" name="banner" class="form-control {{$errors->has('banner')?'error':''}}" />
                                            @if ($errors->has('banner'))
                                            <p style="color: red; margin: 0; font-size: 10px;">{{ $errors->first('banner') }}</p>
                                            @endif
                                        </div>
                                        @if(getMedia($item->id, 2, 2))
                                        <div class="form-group">
                                            <img src="{{ asset(getMedia($item->id, 2, 2)) }}" style="max-width: 100px;">
                                            <a href="{{ route('deleteMedia', ['id' => $item->id, 'type' => 2, 'use' => 2]) }}" class="mediaDelete" style="color: red;"><i class="fa fa-trash"></i></a>
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
                                                    <input class="form-check-input" type="checkbox" id="status" name="status" {{ $item->status=='active' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="status">Active</label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="fetured" name="fetured" {{ $item->fetured ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="fetured">Featured</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Published Date</label>
                                            <input type="date" name="created_at" class="form-control form-control-sm" value="{{ $item->created_at->format('Y-m-d') }}">
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