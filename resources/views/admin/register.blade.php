@extends('layouts.app')
<title>Welcome To EverGalax - Sign Up</title>
@section('content')

<div id="section-1">
    <div class="container-fluid container-comp">
        <div class="col-md-8">
           <div class="card card-ext">
                <div class="card-header card-header-ex" style="border-radius: 10px;">
                    <h2 class="auth-form-text">EverGalax - {{ __('Login') }} And Grow With Passion & Dreams</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right list-font">{{ __('First Name') }}</label>

                            <div class="col-md-5">
                                <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} inputep" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right list-font">{{ __('Last Name') }}</label>

                            <div class="col-md-5">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} inputep" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right list-font">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-5">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} inputep row" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right list-font">{{ __('Password') }}</label>

                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} inputep" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirmpassword" class="col-md-4 col-form-label text-md-right list-font">{{ __('Confirm Password') }}</label>

                            <div class="col-md-5">
                                <input id="confirmpassword" type="password" class="form-control inputep" name="confirmpassword" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }} row">
                            <label class="col-md-4 col-form-label text-md-right list-font">Gender</label>

                                <div class="col-md-5 col-form-label text-md-left">

                                    
                                    <label class="col-sm-1.9 control-label{{ $errors->has('gender') ? ' error-field-radio' : '' }} list-font">
                                        <input type="radio" name="gender" value="male" id="male" class="gender gend-adj" value="Male"> Male 
                                    </label>
                                    

                                    <label class="col-sm-1.9 control-label {{ $errors->has('gender') ? ' error-field-radio' : '' }} list-font gend-adj">
                                        <input type="radio" name="gender" value="female" id="female" class="gender gend-adj" value="Female"> Female
                                    </label><br/>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>   
                                        </span> 
                                     @endif
                                </div>  
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-4 text-md-right">
                                <p class="tnc">By clicking Sign Up, you agree to our <a href="#" id="atnc">Terms</a> and <a href="#" id="atnc">Conditions</a>
                                </p>
                                <button type="submit" class="btn btn-own-rg">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div id="already-member">
                        <div class="pad-side">
                            <a href="{{ route('login') }}">Already a member? Login here...</a>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
