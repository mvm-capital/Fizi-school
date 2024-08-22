@extends('auth.layout')
@section('content')
@include('inc.messages')

<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Register Account</h5>
        <p class="text-muted mt-2">Register to gain access to the Fizi admin panel</p>
    </div>
    <form class="needs-validation mt-4 pt-2" method="POST" action="{{ route('auth.newUser') }}">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="username" name="name" placeholder="Enter full name" required>
            <div class="invalid-feedback">
                Please Enter your Full name
            </div>
        </div>
        <div class="mb-3">
            <label for="useremail" class="form-label">Email</label>
            <input type="email" class="form-control" id="useremail" name="email" placeholder="Enter email" required>
            <div class="invalid-feedback">
                Please Enter Email
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            <div class="invalid-feedback">
                Please enter your password.
            </div>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" required>
            <div class="invalid-feedback">
                Please confirm your password.
            </div>
        </div>

        <div class="mb-4">
            <p class="mb-0">By registering you agree to the Fizi <a href="#" class="text-primary">Terms of Use</a></p>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
        </div>
    </form>
    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Already have an account ? <a href="{{ route('auth.login') }}" class="text-primary fw-semibold"> Login </a> </p>
    </div>
</div>
@endsection
