@extends('layouts.auth')

@section('content')
<div id="auth">
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="{{ asset('dist/assets/images/logo/logo.svg') }}" alt="Logo"></a>
                </div>
                <h1 class="auth-title">Sign Up</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group position-relative mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input id="name" type="text" class="form-control form-control-xl" name="name" placeholder="Name">
                        </div>
                    </div>

                    <div class="form-group position-relative mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input id="email" type="email" class="form-control form-control-xl" name="email" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group position-relative mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            <input id="password" type="password" class="form-control form-control-xl" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group position-relative mb-4">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            <input id="password-confirm" type="password" class="form-control form-control-xl" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="{{ route('login') }}" class="font-bold">Log
                            in</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <!-- Placeholder for additional content or functions -->
            </div>
        </div>
    </div>
</div>

@endsection
