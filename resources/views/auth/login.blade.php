@extends('auth.layout')

@section('content')
@include('inc.messages')
<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Welcome Back!</h5>
        <p class="text-muted mt-2">Sign in to continue to Fizi Admin Panel</p>
    </div>
    <form class="mt-4 pt-2" action="{{ route('auth.login-user') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="email" class="form-control" id="username" placeholder="Enter username" required>
        </div>
        <div class="mb-3">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label">Password</label>
                </div>
                <div class="flex-shrink-0">
                    <div class="">
                        <a href="{{ route('auth.forgotpassword') }}" class="text-muted">Forgot password?</a>
                    </div>
                </div>
            </div>

            <div class="input-group auth-pass-inputgroup">
    <input type="password" name="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" required id="password-input">
    <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
</div>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>

    <div class="mt-4 pt-2 text-center">
        <div class="signin-other-title">
            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Sign in with -</h5>
        </div>

        <a href="{{ route('google.redirect') }}" class="btn btn-outline-primary w-100 waves-effect waves-light d-flex justify-content-evenly align-items-center" type="submit">
            <img src="{{ asset('images/google.png') }}" width="16" height="16" />
            <span>Sign In with Google</span>
        </a>
    </div>
</div>
@endsection

@section('script')
<script>
    document.getElementById('password-addon').addEventListener('click', function () {
        var passwordInput = document.getElementById('password-input');
        var passwordAddon = document.getElementById('password-addon').querySelector('i');

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordAddon.classList.remove("mdi-eye-outline");
            passwordAddon.classList.add("mdi-eye-off-outline");
        } else {
            passwordInput.type = "password";
            passwordAddon.classList.remove("mdi-eye-off-outline");
            passwordAddon.classList.add("mdi-eye-outline");
        }
    });
</script>
@endsection
