@extends('layouts.logsign')

@section('content1')
@guest
    <div class="container container-fluid" id ="usertype" style="display: none">
        <div  class="row text-center bottom" >

            <div class="col-md-3"></div>
            <div class="col-md-6">

                <div class="row text-center">

                    <div class="col-md-12">

                        <div class="col-md-4">

                            <img src="/storage/cover_images/iconlog.jpg" class="img-circle" id="img1">
                            <div class="row">
                                <button class="btn btn-default" id="admin" style="font-size: 30px" onclick="myFunction1()">Company</button>
                            </div>
                        </div>
                        <div class="col-md-4">

                        </div>

                        <div class="col-md-4">
                            <img src="/storage/cover_images/iconlog.jpg" class="img-circle" id="img2">
                            <div class="row" >
                                <button class="btn btn-default" id="user" style="font-size: 30px" onclick="myFunction()">User</button>
                            </div><
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3"></div>
        </div>

    </div>
@endguest



<script>
    function myFunction(){
        var x = document.getElementById("formUser");
        var y = document.getElementById("usertype");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }

    }
</script>

<script>
    function myFunction1(){
        var x = document.getElementById("formCompany");
        var y = document.getElementById("usertype");

        if(x.style.display === "none"){
            x.style.display = "block";
            y.style.display = "none";
        }

    }
</script>




<div class="row" id ="formUser">
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

<div class="row" id ="formCompany" style="display: none">
<div class="col-md-4"> </div>
<div class="col-md-4">
                    <form class="form-container" method="POST" action="{{ route('register') }}">
                        @csrf

<div class="form-group">

<img id="icon" src="/storage/cover_images/iconlog.jpg" alt="icon"/>
 </div>
                        <div class="form-group">


                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                               placeholder="Company name" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                          <div class="form-group">

                         <input id="streetaddress" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                         placeholder="Street address" required>

                         </div>

                        <div class="row">
                         <div class="form-group col-md-6">
                        <input id="city" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                        placeholder="City" required>

                        </div>
                        <div class="form-group col-md-6">
                                                <input id="state" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                                placeholder="State/Province" required>

                                                </div>

                        </div>
           <div class="row">
                                    <div class="form-group col-md-6">
                                   <input id="code" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                   placeholder="Postal Code" required>

                                   </div>
                                   <div class="form-group col-md-6">
                                                           <input id="country" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}"
                                                           placeholder="Country" required>

                                                           </div>

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
