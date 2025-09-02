@extends('layouts.auth')

@section('content')
    <div class="page-content page-auth">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                    <div class="col-lg-6 text-center">
                        <img src="/images/login-placeholder.svg" class="w-50 mb-4 mb-lg-none" alt="" />
                    </div>
                    <div class="col-lg-5">
                        <h2>
                            Shopping for essentials,<br />
                            has become easier
                        </h2>
                        <form method="POST" action="{{ route('login') }}" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input id="email" class="form-control w-75 @error('email') is-invalid @enderror"
                                    type="email" name="email" value="{{ old('email') }}" required autofocus
                                    autocomplete="username" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" class="form-control w-75 @error('password') is-invalid @enderror"
                                    type="password" name="password" required autocomplete="current-password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert"></span>
                                    <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block w-75 mt-4">
                                Sign In to My Account
                            </button>
                            <a href="{{ route('register') }}" class="btn btn-signup btn-block w-75 mt-4">
                                Sign Up
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
