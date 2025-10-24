@extends('backend.app')

@push('title')
{{ __('Configure Menus') }}
@endpush

@push('css')
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
 

    .accordion-button {
        background-color: #f8f9fa;
        border-radius: 8px;
        font-size: 15px;
        font-weight: 600;
    }

    .accordion-button:not(.collapsed) {
        color: #0d6efd;
        background-color: #e9f2ff;
        box-shadow: none;
    }

    /* Sortable list styling */
    .listmenu ul {
        list-style: none;
        padding-left: 0;
        margin-top: 10px;
    }

    .listmenu ul li {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
        margin-bottom: 8px;
        padding: 12px 15px;
        border: 1px solid #e3ebf3;
        border-radius: 6px;
        cursor: move;
        transition: all 0.2s ease;
    }

    .listmenu ul li:hover {
        background-color: #f8faff;
        border-color: #cce0ff;
    }

    .menumanage a {
        color: #6c757d;
        margin-left: 8px;
        transition: color 0.2s;
    }

    .menumanage a:hover {
        color: #0d6efd;
    }

    /* Custom checkboxes */
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

.modal {
    z-index: 9999 !important;
}
.modal-backdrop {
    z-index: 9998 !important;
}


</style>
@endpush

@section('content')
<div class="section__content">
    <div class="container-fluid">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold mb-0">Menu Configuration</h3>
            <div>
                @if($menu->parent_id)
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('menusEdit', $menu->parent_id) }}">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                @else
                    <a class="btn btn-outline-primary btn-sm" href="{{ route('menus') }}">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                @endif
            </div>
        </div>

        <div class="row g-3">
            <!-- Left: Add Items -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Add Items</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionWrapa1">
                            @include('backend.menus.includes.customLink')
                            @include('backend.menus.includes.pagesList')
                            @include('backend.menus.includes.category')
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Menu Config -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Menu Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('menusUpdate', $menu->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Menu Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control  {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                                               placeholder="Enter Menu Name" value="{{ $parent->name ?: old('name') }}" required>
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label fw-semibold">Menu Location</label>
                                        <select class="form-control select2" name="location">
                                            <option value="">Select Location</option>
                                            <option value="Header Menus" {{ $parent->location == 'Header Menus' ? 'selected' : '' }}>Header Menus</option>
                                            <option value="Fotter Menus" {{ $parent->location == 'Fotter Menus' ? 'selected' : '' }}>Fotter Menus</option>
                                            <option value="Home Menus" {{ $parent->location == 'Home Menus' ? 'selected' : '' }}>Home Menus</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <p class="fw-semibold text-secondary">
                                <b>@if($menu->parent_id) {{ $menu->menuName() ?: 'No Found' }} @else Primary @endif:</b> Label
                            </p>

                            <div class="listmenu">
                                <ul id="sortable">
                                    @foreach($menu->subMenus as $menuli)
                                        <li @if(!$menuli->menuName()) style="border:1px solid red;" @endif>
                                            <span>
                                                <input type="hidden" name="menuids[]" value="{{ $menuli->id }}" />
                                                @if($menuli->icon)
                                                    <span>{!! $menuli->icon !!}</span>
                                                @elseif($menuli->imageFile)
                                                    <img src="{{ asset($menuli->image()) }}" width="25">
                                                @endif
                                                {{ $menuli->menuName() ?: 'No Found' }}
                                                <small class="text-muted ms-1">
                                                    (
                                                    @if($menuli->menu_type==1) Page 
                                                    @elseif($menuli->menu_type==2) Category 
                                                    @elseif($menuli->menu_type==3) Services 
                                                    @elseif($menuli->menu_type==4) Doctor 
                                                    @elseif($menuli->menu_type==0) Custom 
                                                    @endif 
                                                    )
                                                </small>
                                                <strong class="ms-2 text-secondary small">Sub: {{ $menuli->subMenus->count() }}</strong>
                                            </span>

                                            <span class="menumanage">
                                                <a href="{{ route('menusItemsEdit', $menuli->id) }}"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('menusEdit', $menuli->id) }}"><i class="fa fa-plus"></i></a>
                                                <a href="{{ route('menusItemsDelete', $menuli->id) }}">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <hr>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="status" name="status" {{ $parent->status == 'active' ? 'checked' : '' }}>
                                <label class="form-check-label" for="status">Active</label>
                            </div>

                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
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
<script>
    const jQa = jQuery.noConflict();

    document.addEventListener('DOMContentLoaded', () => {
        jQa('#sortable').sortable();
        jQa('#sortable').disableSelection();
    });
</script>
@endpush
