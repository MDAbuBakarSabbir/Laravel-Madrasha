@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
            <img src="{{asset('dashboard')}}/assets/images/thumbs/auth-img1.png" alt="">
        </div>
        <div class="auth-right py-40 px-24 flex-center flex-column">
            <div class="auth-right__inner mx-auto w-100">
                <a href="index.html" class="auth-right__logo">
                    <img src="{{asset('dashboard')}}/assets/images/logo/logo.png" alt="">
                </a>
                <h2 class="mb-8">Welcome to Back! &#128075;</h2>
                <p class="text-gray-600 text-15 mb-32">Please sign in to your account and start the adventure</p>

                <form action="#">
                    <div class="mb-24">
                        <label for="fname" class="form-label mb-8 h6">Email</label>
                        <div class="position-relative">
                            <input type="text" class="form-control py-11 ps-40 @error('email') is-invalid @enderror" name="email" placeholder="Type your username">
                            <span class="position-absolute top-50 translate-middle-y ms-16 text-gray-600 d-flex"><i class="ph ph-user"></i></span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-24">
                        <label for="current-password" class="form-label mb-8 h6">Current Password</label>
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
                    </div>
                    <button type="submit" class="btn btn-main rounded-pill w-100">Log In</button>

                    <p class="mt-32 text-gray-600 text-center">New on our platform?
                        <a href="{{route('register')}}" class="text-main-600 hover-text-decoration-underline">Create an account</a>
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
    <script src="../../cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/full-calendar.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-ui.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/editor-quill.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/apexcharts.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('dashboard')}}/assets/js/main.js"></script>



    </body>
</html> --}}
