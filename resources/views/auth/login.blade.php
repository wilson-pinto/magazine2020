@extends('layouts.app')

@section('content')

<div class="row mx-0 main-div py-0 d-none d-md-flex align-items-center justify-content-center">
    <div class="col-8 col-xl-4 p-5 bg-op rounded">
        <form method="POST" class="m-5" action="{{ route('login') }}">
            @csrf
            <h2 class="text-uppercase text-white text-center mb-4">Admin login</h2>
            <div class="form-group row">
                <input id="email" type="email"
                    class="border-0 rounded-0 form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group row mt-4">
                <input id="password" type="password"
                    class="border-0 rounded-0 form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



            <div class="form-group row mb-0 mt-4">
                <button type="submit"
                    class="btn btn-warning rounded-0 w-100 text-white text-uppercase font-weight-bold">
                    {{ __('Login') }}
                </button>
            </div>
            <div class="form-group row justify-content-center">
                @if (Route::has('password.request'))
                <a class="btn btn-link text-white" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </form>
    </div>
</div>

@endsection