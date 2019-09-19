@extends('layouts.app')
<title>Welcome To EverGalax - Login</title>
@section('content')


<div id="section-1">
    <div class="container-fluid container-comp">
        <div class="col-md-8">
            <div class="card card-ext">
                <div class="card-header card-header-ex" style="border-radius: 10px;">
                    <h2 class="auth-form-text">EverGalax - {{ __('Login') }} - Admin</h2>
                </div>

                    <div class="card-body card-ext">
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right list-font">{{ __('E-Mail Address') }}:</label>

                                <div class="col-md-5">
                                
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputep" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right list-font">{{ __('Password') }}:</label>

                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputep" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4" style=" min-height: 24px;">
                                    <div class="al-mem">
                                        <a href="{{ route('password.request') }}" class="list-font"> Forgot Password?</a>
                                    </div>
                                    
                                    <div class="checkbox">
                                        <label class="list-font" style="display: inline-block;">
                                            <input type="checkbox" style="height: 13px;" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="pad-side">    
                                        <button type="submit" class="btn-own-lg">
                                            Login
                                        </button>
                                    </div>    
                                    <div class="already-member">
                                        <a href="{{ route('register') }}">Not A Member? Register here...</a>
                                    </div>
                                </div>    
                            </div>
                        </form>
                        <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">  
                                    <div class="pad-side"> 
                                    <span class="list-font">
                                        OR
                                    </span>
                                     
                                    <div class="social-signup">
                                        <p>Sign Up Using</p>
                                    </div>

                                    <div class="social-icon-guest">
                                        <a href="#" class="icon-social-item bgfb">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        
                                        <a href="#" class="icon-social-item bgtw">
                                            <i class="fa fa-twitter"></i>
                                        </a>

                                        <a href="#" class="icon-social-item bggoog">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    </div>        
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
