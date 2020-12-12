@extends('layouts.app')

@section('title','Login')
@section('content')
<section class="login-content">
    <div class="logo">
        <h1>Vali</h1>
    </div>
    <div class="login-box">
        <form class="login-form" action="{{ route('login') }}" method="POST">
            @csrf
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <div class="form-group">
                <label for="email">USERNAME or EMAIL</label>
                <input type="text" name="email"
                    class="form-control @if($errors->has('email') || $errors->has('username')) is-invalid @endif"
                    placeholder="example@example.com" value="{{old('email')}}">
                @if($errors->has('email') || $errors->has('username'))
                <span class="invalid-feedback" role="alert">
                    {{$errors->first('email') }}
                    {{ $errors->first('username')}}
                </span>
                @endif
            </div>
            <div class="form-group">
                <label for="password" class="control-label">PASSWORD</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" placeholder="*************" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="utility">
                    <div class="animated-checkbox">
                        <label>
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}><span class="label-text">Stay Signed in</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                    <p class="semibold-text mb-2"><a href="{{ route('password.request') }}" data-toggle="flip">Forgot
                            Password ?</a></p>
                    @endif

                </div>
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN
                    IN</button>
            </div>
        </form>
        <form class="forget-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
            <div class="form-group">
                <label class="control-label">EMAIL</label>
                <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
                <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back
                        to Login</a></p>
            </div>
        </form>
    </div>
</section>

@endsection