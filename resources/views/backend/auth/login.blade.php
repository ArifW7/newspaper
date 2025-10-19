@extends('backend.auth.authLayout')

@push('title')
Admin Login
@endpush

@section('content')
<div class="register-container">
    <div class="register-box">
        <h2>Admin Login</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="register-btn">Register</button>
            <div class="login-link">
                Don't Have an account? <a href="{{ route('register') }}">Sign Up</a>
            </div>
        </form>
    </div>
</div>
@endsection
