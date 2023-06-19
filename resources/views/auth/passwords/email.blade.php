@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<section class="login">
<div class="title-dashboard">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card-auth">
                    <div class="card-content">
                        <h2 class="center">{{ __('Reset Password') }}</h2>

                        <div class="card-body">
                           

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="row mb-3">
                                
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-content @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn-login btn">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
=======
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
</section>
=======
>>>>>>> 6875360cd66618fd3f8a84256dac67dbd96c98be
@endsection
