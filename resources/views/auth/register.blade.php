@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edmate Learning Dashboard HTML Template</title>
    <link rel="shortcut icon" href="{{asset('dashboard')}}/assets/images/logo/favicon.png">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/file-upload.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/plyr.css">
    <link rel="stylesheet" href="../../cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/full-calendar.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/editor-quill.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/apexcharts.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/calendar.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/jquery-jvectormap-2.0.5.css">
    <link rel="stylesheet" href="{{asset('dashboard')}}/assets/css/main.css">
</head>
<body>
  <div class="preloader">
    <div class="loader"></div>
  </div>
<div class="side-overlay"></div>
    <section class="auth d-flex">
        <div class="auth-left bg-main-50 flex-center p-24">
            <img src="{{asset('dashboard')}}/assets/images/thumbs/auth-img2.png" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="index.html" class="auth-right__logo">
                    <img src="{{asset('dashboard')}}/assets/images/logo/logo.png" alt="">
                </a>
                <h2 class="mb-8">Register</h2>
                <p class="text-gray-600 text-15 mb-32">Please sign up to your account and start the adventure</p>

                <form action="{{ route('register') }}" method="POST">
                    <div class="mb-24">
                        <label for="name" class="form-label mb-8 h6"> Name</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40 @error('name') is-invalid @enderror" name="name" placeholder="Type your username">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="email" class="form-label mb-8 h6">Email </label>
                        <div class="position-relative">
                            <input type="email" class="form-control py-11 ps-40 @error('email') is-invalid @enderror" name="email" placeholder="Type your email address">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-envelope"></i></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40 @error('password') is-invalid @enderror" name="password" placeholder="Enter Current Password" value="password">
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <span class="text-gray-900 text-15 mt-4">Must be at least 8 characters</span>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">Confirm Password</label>
                        <div class="position-relative">
                            <input type="password" class="form-control py-11 ps-40 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Enter Current Password" value="password">
                            <span class="toggle-password position-absolute top-50 inset-inline-end-0 me-16 translate-middle-y ph ph-eye-slash" id="#current-password"></span>
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-lock"></i></span>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <span class="text-gray-900 text-15 mt-4">Must be at least 8 characters</span>
                    </div>
                    <div class="mb-32 flex-between flex-wrap gap-8">
                        <div class="form-check mb-0 flex-shrink-0">
                            <input class="form-check-input flex-shrink-0 rounded-4 @error('email') is-invalid @enderror" type="checkbox" value="" id="remember">
                            <label class="form-check-label text-15 flex-grow-1" for="remember">Remember Me </label>
                        </div>
                        <a href="forgot-password.html" class="text-main-600 hover-text-decoration-underline text-15 fw-medium">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">{{ __('Register') }}</button>
                    <p class="mt-32 text-gray-600 text-center">Already have an account?
                        <a href="{{route('login')}}" class="text-main-600 hover-text-decoration-underline"> Log In</a>
                    </p>
                </form>
            </div>
        </div>
    </section>

    <script src="{{asset('dashboard')}}/assets/js/jquery-3.7.1.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/boostrap.bundle.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/phosphor-icon.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/file-upload.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/plyr.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/full-calendar.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-ui.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/editor-quill.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/apexcharts.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/main.js"></script>
    </body>
</html> --}}
