<!-- resources/views/auth/passwords/custom-reset.blade.php -->
@extends('auth.layout')

@section('content')
<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Set New Password</h5>
        <p class="text-muted mt-2">Please set your new password.</p>
    </div>
    <form class="mt-4" action="{{ route('password.update') }}" method="POST">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">New Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter new password" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password" required>
        </div>
        <div class="mb-3 mt-4">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset Password</button>
        </div>
    </form>
</div>
@endsection
