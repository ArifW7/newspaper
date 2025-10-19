@extends('backend.app')

@push('css')
<style>
    /* Card styling */
    .card {
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        border: none;
    }

    .card-header {
        background: #00276C;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        border-radius: 12px 12px 0 0;
    }

    .form-control {
        border-radius: 8px;
        padding: 10px 12px;
        border: 1px solid #ced4da;
    }

    .form-label {
        font-weight: 500;
        color: #333;
    }

    /* Custom file upload button */
    .custom-file-upload {
        display: inline-block;
        padding: 10px 15px;
        cursor: pointer;
        background-color: #f8f9fa;
        border: 1px dashed #ced4da;
        border-radius: 8px;
        width: 100%;
        text-align: center;
        color: #555;
        transition: all 0.3s ease;
    }

    .custom-file-upload:hover {
        background-color: #e9ecef;
        color: #00276C;
    }

    .custom-file-upload i {
        margin-right: 8px;
        font-size: 16px;
    }

    /* Submit button */
    .btn-primary {
        background-color: #00276C;
        border: none;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #001f4d;
    }

    /* Responsive spacing */
    @media (max-width: 576px) {
        .form-group.row {
            flex-direction: column;
        }

        .form-group.row .col-sm-9,
        .form-group.row .col-sm-3 {
            width: 100%;
        }

        .form-group.row .col-sm-3 {
            margin-bottom: 5px;
        }
    }
</style>
@endpush

@section('content')
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-cogs"></i> Site Settings
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settingUpdate') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf

                            <div class="form-group row mb-3">
                                <label for="site_name" class="col-sm-3 col-form-label form-label">Site Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_name" name="site_name" value="{{ get_option('site_name') }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="site_title" class="col-sm-3 col-form-label form-label">Site Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_title" name="site_title" value="{{ get_option('site_title') }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="site_logo" class="col-sm-3 col-form-label form-label">Site Logo</label>
                                <div class="col-sm-9">
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="fa fa-cloud-upload"></i> Select Logo
                                    </label>
                                    <input type="file" id="file-upload" name="site_logo" style="display:none;">
                                    @if(get_option('site_logo'))
                                        <div class="mt-2">
                                            <img src="{{ asset('uploads/' . get_option('site_logo')) }}" alt="Site Logo" height="50">
                                        </div>
                                    @endif
                                </div>
                            </div>

                            

                            <div class="form-group row mb-3">
                                <label for="site_phone" class="col-sm-3 col-form-label form-label">Site Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="site_phone" name="site_phone" value="{{ get_option('site_phone') }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
                                <label for="site_email" class="col-sm-3 col-form-label form-label">Site Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="site_email" name="site_email" value="{{ get_option('site_email') }}" required>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="site_address" class="col-sm-3 col-form-label form-label">Site Address</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="site_address" class="form-control" rows="4">{{ get_option('site_address') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label for="site_map" class="col-sm-3 col-form-label form-label">Site Map</label>
                                <div class="col-sm-9">
                                    <textarea type="text" name="site_map" class="form-control" rows="4">{{ get_option('site_map') }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save Settings</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    document.querySelector('.custom-file-upload').addEventListener('click', function() {
        document.getElementById('file-upload').click();
    });
</script>
@endpush
