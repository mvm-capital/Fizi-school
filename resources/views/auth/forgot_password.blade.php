@extends('auth.layout')
@section('content')
<div class="auth-content my-auto">
    <div class="text-center">
        <h5 class="mb-0">Reset Password</h5>
        <p class="text-muted mt-2">Reset Password with Minia.</p>
    </div>
    <div class=" text-center my-4" role="alert">
        Enter your Email and instructions will be sent to you!
    </div>
    @include('inc.messages')
    <form class="mt-4" action="{{ route('password.email') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter email" required>
        </div>
        <div class="mb-3 mt-4">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Reset</button>
        </div>
    </form>


    <div class="mt-5 text-center">
        <p class="text-muted mb-0">Remember It ? <a href="{{route('auth.login')}}"
                class="text-primary fw-semibold"> Sign In </a> </p>
    </div>
</div>
@endsection
