@extends('backend.auth.authLayout')

@push('title')
Admin Register
@endpush

@section('content')


<div class="register-container">
    <div class="register-box">
        <h2>Admin Registration</h2>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="name" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
            <div class="login-link">
                Already have an account? <a href="{{ route('login') }}">Sign In</a>
            </div>
        </form>
    </div>
</div>
@endsection
