@extends('backend.app')

@push('css')
  <style>
  .profile-container {
      background: #f4f6f9;
      min-height: 100vh;
      padding: 50px 15px;
      font-family: 'Poppins', sans-serif;
  }

  .profile-card, .password-card {
      background: #fff;
      border: none;
      border-radius: 15px;
      transition: 0.3s all ease;
  }

  .profile-card:hover, .password-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.08);
  }

  .profile-header {
      position: relative;
  }

  .profile-avatar img {
      width: 130px;
      height: 130px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #007bff;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  }

  .upload-btn-wrapper {
      position: relative;
      overflow: hidden;
      display: inline-block;
  }

  .btn-upload {
      border: none;
      color: white;
      background-color: #007bff;
      padding: 6px 15px;
      border-radius: 20px;
      font-size: 14px;
      cursor: pointer;
      transition: background 0.3s;
  }

  .btn-upload:hover {
      background-color: #0056b3;
  }

  .upload-btn-wrapper input[type=file] {
      font-size: 100px;
      position: absolute;
      left: 0;
      top: 0;
      opacity: 0;
  }

  .form-group {
      margin-bottom: 1.2rem;
  }

  .form-control {
      border-radius: 10px;
      box-shadow: none;
      border: 1px solid #d1d3e2;
      padding: 10px 14px;
  }

  .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0,123,255,0.3);
  }

  .btn-primary, .btn-secondary {
      border-radius: 25px;
      padding: 10px;
      font-weight: 600;
      font-size: 15px;
  }

  .btn-primary {
      background-color: #007bff;
      border: none;
  }

  .btn-secondary {
      background-color: #6c757d;
      border: none;
  }

  .text-danger {
      font-size: 13px;
      display: block;
      margin-top: 5px;
  }

  </style>
@endpush

@section('content')
<div class="container-fluid profile-container">
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-9">
            <div class="profile-card shadow-lg rounded-3 p-4">
                <div class="profile-header text-center mb-4">
                    <div class="profile-avatar">
                        <img src="{{ !empty($user->image) ? url($user->image) : url('images/admins/No_Image.jpg') }}"
                             id="showImage" class="avatar-img rounded-circle">
                    </div>
                    <div class="upload-btn-wrapper mt-3">
                        <button class="btn-upload">Upload New</button>
                        <input type="file" name="image" id="image" accept="image/*">
                    </div>
                    
                    <h4 class="mt-3">{{ $user->name }}</h4>
                    <h5 class="mt-2">{{ $user->email }}</h5>
                    <p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> {{ $user->address ?? 'Dhaka, Bangladesh' }}</p>
                </div>

                <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="old_image" value="{{ $user->image }}">

                    <div class="form-group">
                        <label><i class="fas fa-user"></i> Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                    </div>

                    <div class="form-group">
                        <label><i class="fas fa-envelope"></i> Email</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                    </div>

                    <div class="form-group">
                        <label><i class="fas fa-map-marker-alt"></i> Address</label>
                        <input type="text" class="form-control" name="address" value="{{ old('address', $user->address) }}">
                    </div>

                    <div class="form-group">
                        <label><i class="fas fa-phone"></i> Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ old('phone', $user->phone) }}">
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">💾 Save Changes</button>
                </form>
            </div>

            <div class="password-card shadow-lg rounded-3 p-4 mt-5">
                <h5 class="mb-4 text-center"><i class="fas fa-lock"></i> Change Password</h5>

                <form action="{{ route('profile.password.update') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" name="current_password" class="form-control" required>
                        @error('current_password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" class="form-control" required>
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <button type="submit" class="btn btn-secondary w-100 mt-3">🔐 Update Password</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('#image').change(function(e){
        let reader = new FileReader();
        reader.onload = function(e){
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    });
});
</script>
@endpush
