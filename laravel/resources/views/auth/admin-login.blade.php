@extends('layouts.logsign')

@section('content1')
<p>ADMIN</p>
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4">
<!--form start-->
<form class="form-container" method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf
<div class="form-group">

<img id="icon" src="/storage/cover_images/iconlog.jpg" alt="icon"/>
 </div>

  <div class="form-group">
     <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email"
     required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
  </div>
  <div class="form-group">
     <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
     placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
  </div>

  <div class="checkbox">
    <label style="color:black">
      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}

    </label>
  </div>
  <div class="form-group">
 <button type="submit" class="btn btn-primary">
                                     {{ __('Login') }}
                                 </button>

  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
   </div>
</form>
<!--form end-->

 </div>

<div class="col-md-4"> </div>
</div>

@endsection
