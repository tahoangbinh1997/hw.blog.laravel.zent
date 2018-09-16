@extends('layouts.app')

@section('content')
<div class="content">
    <div id="form_wrapper" class="form_wrapper">
        <form class="login active" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            @csrf
            
            <h3>Login</h3>
            <div>
                <label for="email">Email:</label>
                <input type="text" name="email" value="{{ old('email') }}" required autofocus />
                @if ($errors->has('email'))
                <span class="errors" style="font-size: 12px;color: red;padding-left: 30px;">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div>
                <label for="password">Password: <a href="{{ route('password.request') }}" rel="forgot_password" class="forgot linkform">Forgot your password?</a></label>
                <input type="password" name="password" required value="{{ old('password') }}" />
                @if ($errors->has('password'))
                <span class="errors">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="bottom">
                <div class="remember"><input type="checkbox"  {{ old('remember') ? 'checked' : '' }}/><span>Keep me logged in</span></div>
                <input type="submit" value="Login"></input>
                <a href="{{ route('register') }}" rel="register" class="linkform">You don't have an account yet? Register here</a>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <div class="clear"></div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

