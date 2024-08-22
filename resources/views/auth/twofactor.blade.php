@extends('auth.layout')

@section('content')
<div class="auth-content my-auto">
    <div class="text-center">
        <div class="avatar-lg mx-auto">
            <div class="avatar-title rounded-circle bg-light">
                <i class="bx bxs-envelope h2 mb-0 text-primary"></i>
            </div>
        </div>
        <div class="p-2 mt-4">
            <h4>Verify your email</h4>
            <p class="mb-5">Please enter the 4 digit code sent to <span class="fw-bold">{{ $email }}</span></p>

            <form action="{{ route('auth.verifyCode') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="digit1-input" class="visually-hidden">Digit 1</label>
                            <input type="text" class="form-control form-control-lg text-center two-step"
                                maxLength="1" name="code[]" id="digit1-input" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="digit2-input" class="visually-hidden">Digit 2</label>
                            <input type="text" class="form-control form-control-lg text-center two-step"
                                maxLength="1" name="code[]" id="digit2-input" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="digit3-input" class="visually-hidden">Digit 3</label>
                            <input type="text" class="form-control form-control-lg text-center two-step"
                                maxLength="1" name="code[]" id="digit3-input" required>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="mb-3">
                            <label for="digit4-input" class="visually-hidden">Digit 4</label>
                            <input type="text" class="form-control form-control-lg text-center two-step"
                                maxLength="1" name="code[]" id="digit4-input" required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="email" value="{{ $email }}">
                <div class="mt-4">
                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Confirm</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-5 text-center">
    <p class="text-muted mb-0">Didn't receive an email?
        <form action="{{ route('auth.resendVerificationEmail') }}" method="POST" style="display:inline;">
            @csrf
            <input type="hidden" name="email" value="{{ $email }}">
            <button type="submit" class="btn btn-link text-primary fw-semibold">Resend</button>
        </form>
    </p>
</div>

</div>
@endsection
