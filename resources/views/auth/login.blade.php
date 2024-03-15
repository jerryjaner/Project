@extends('layouts.guest')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline card-primary">
                {{-- <div class="card-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="m-0 d-flex justify-content-center">{{ __('Sign In') }}</h4>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="card-body login-card-body">
                    <p class="login-box-msg">{{ __('Sign In') }}</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <label class="input-group" for="email">Enter email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" required autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="error invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group" for="password">Enter password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="error invalid-feedback">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-2">
                            <div class="col-6 d-flex justify-content-start align-items-center">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember" name="remember">
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-6 d-flex justify-content-end align-items-center">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-block m-0">{{ __('Login') }}</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div> <!-- card.// -->
        </div>
    </div>
@endsection
