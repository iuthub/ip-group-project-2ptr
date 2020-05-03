@extends('layouts.logsign')

@section('content1')
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4">
                    <form class="form-container" method="POST" action="{{ route('register') }}">
                        @csrf

<div class="form-group">

<img id="icon" src="/storage/cover_images/iconlog.jpg" alt="icon"/>
 </div>
                        <div class="form-group">


                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                               placeholder="Username" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group">


                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"
                                  placeholder="Email" required>

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

                        <div class="form-group">



                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                  placeholder="Confirm password" required>

                        </div>

                        <div class="form-group">

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>

                        </div>
                    </form>
                </div>

       <div class="col-md-4"> </div>
       </div>
      @endsection
