@extends('layouts.app')

@section('content')
{{-- <div class="content">
    <div id="form_wrapper" class="form_wrapper">
        <form>
            <h3>Register</h3>
            <div class="column">
                <div>
                    <label>First Name:</label>
                    <input type="text" />
                    <span class="error">This is an error</span>
                </div>
                <div>
                    <label>Last Name:</label>
                    <input type="text" />
                    <span class="error">This is an error</span>
                </div>
                <div>
                    <label>Website:</label>
                    <input type="text" value="http://"/>
                    <span class="error">This is an error</span>
                </div>
            </div>
            <div class="column">
                <div>
                    <label>Username:</label>
                    <input type="text"/>
                    <span class="error">This is an error</span>
                </div>
                <div>
                    <label>Email:</label>
                    <input type="text" />
                    <span class="error">This is an error</span>
                </div>
                <div>
                    <label>Password:</label>
                    <input type="password" />
                    <span class="error">This is an error</span>
                </div>
            </div>
            <div class="bottom">
                <div class="remember">
                    <input type="checkbox" />
                    <span>Send me updates</span>
                </div>
                <input type="submit" value="Register" />
                <a href="index.html" rel="login" class="linkform">You have an account already? Log in here</a>
                <div class="clear"></div>
            </div>
        </form>
    </div>
    <div class="clear"></div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
