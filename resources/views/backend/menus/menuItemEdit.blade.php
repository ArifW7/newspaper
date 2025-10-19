@extends('backend.app')

@push('title')
{{ __('Configure Menus') }}
@endpush

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
    /* Card Layout */
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        border: none;
    }

    .card-header {
        background: linear-gradient(90deg, #4e73df, #1cc88a);
        color: #fff;
        font-weight: 600;
        border-radius: 12px 12px 0 0;
    }

    .card-body {
        padding: 25px;
    }

    /* Form Inputs */
    .form-control {
        border-radius: 8px;
        border: 1px solid #ced4da;
        padding: 10px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #1cc88a;
        box-shadow: 0 0 5px rgba(28, 200, 138, 0.3);
    }

    label {
        font-weight: 500;
        color: #333;
    }

    /* Buttons */
    .btn {
        border-radius: 8px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-success {
        background: #1cc88a;
        border: none;
    }

    .btn-success:hover {
        background: #17a673;
    }

    .btn-outline-primary {
        border-radius: 8px;
        padding: 6px 20px;
    }

    /* Sortable List */
    .listmenu ul {
        padding: 0;
        margin: 0;
    }

    .listmenu ul li {
        list-style: none;
        margin: 5px 0;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #f8f9fa;
        cursor: grab;
        transition: all 0.2s ease;
    }

    .listmenu ul li:hover {
        background: #e9ecef;
    }

    /* Checkbox */
    .i-checks label {
        cursor: pointer;
        font-weight: 500;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .card-body {
            padding: 15px;
        }
        .btn-outline-primary {
            margin-top: 10px;
        }
    }
</style>
@endpush

@section('content')


<div class="section__content">
    <div class="container-fluid">
        <div class="content-header row" style="float: right;">
            <div class="content-header-right ccol-12 mb-md-0 mb-2 text-right">
                <div class="btn-group">
                    @if($menu->parent_id)
                    <a class="btn btn-outline-primary" href="{{route('menusEdit',$menu->parent_id)}}">BACK</a>
                    @else
                    <a class="btn btn-outline-primary" href="{{route('menus')}}">BACK</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Items Update</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('menusItemsUpdate',$menu->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            
                            @if($menu->menu_type==1)
                                <h5><b>Name:</b> {{$menu->menuName()?:'No Found'}} <span class="text-muted">(Page)</span></h5>
                            @elseif($menu->menu_type==2)
                                <h5><b>Name:</b> {{$menu->menuName()?:'No Found'}} <span class="text-muted">(Department)</span></h5>
                            @elseif($menu->menu_type==3)
                                <h5><b>Name:</b> {{$menu->menuName()?:'No Found'}} <span class="text-muted">(Service)</span></h5>
                            @elseif($menu->menu_type==4)
                                <h5><b>Name:</b> {{$menu->menuName()?:'No Found'}} <span class="text-muted">(Doctor)</span></h5>
                            @else
                                <div class="form-group mb-3">
                                    <label>Menu Name*</label>
                                    <input type="text" name="name" value="{{$menu->name}}" class="form-control" placeholder="Enter Menu Name" />
                                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label>Menu Link</label>
                                    <input type="text" name="slug" value="{{$menu->slug}}" class="form-control" placeholder="Enter Menu Link" />
                                    @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label>Menu Icon (Font Icon class)</label>
                                <input type="text" name="icon" value="{{$menu->icon}}" class="form-control" placeholder="Enter Font Icon" />
                                @error('icon') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-8 mb-3">
                                    <label>Menu Image (1X1)</label>
                                    <input type="file" name="image" class="form-control" />
                                    @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                <div class="col-lg-4 d-flex align-items-center justify-content-center mb-3" style="border:1px dashed #ddd; border-radius:8px;">
                                    <span>Image Preview</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Target New Window</label>
                                <div class="i-checks">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="target" name="target" {{$menu->target?'checked':''}}>
                                    <label class="form-check-label" for="status">Active</label>
                                </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-success btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
<script type="text/javascript">
    // Avoid conflicts with other JS libraries
    const jQa = jQuery.noConflict();

    document.addEventListener('DOMContentLoaded', () => {
        // Initialize the main sortable list
        jQa('#sortable').sortable();
        jQa('#sortable').disableSelection();

        // Initialize any nested sortable lists
        jQa('.sortable').sortable();
        jQa('.sortable').disableSelection();
    });
</script>
@endpush
