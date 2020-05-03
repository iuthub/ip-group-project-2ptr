@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-3"></div>
           <div class="col-md-6">
               <div class="well-lg">
                   <div class="row">
                       <div class="col-md-3"></div>
                       <div class="col-md-4">
                           <img src="/images/networking.png" id="netW">
                       </div>
                       <div class="col-md-offset-4"></div>
                   </div>

                   <div class="row">
                       <div class="col-md-3"></div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <input type="text" class="form-control" placeholder="Name">
                           </div>
                           <div class="form-group">
                               <input type="password" class="form-control" placeholder="Password">
                           </div>
                       </div>
                       <div class="col-md-offset-3"></div>
                   </div>


                   <div class="row">
                       <div class="col-md-3"></div>
                           <div class="col-md-6">
                               <div class="btn-group btn-group-justified">
                                   <a href="#" class="btn btn-primary">Login</a>
                               </div>
                           </div>
                       <div  class="col-md-offset-6"></div>
                   </div>
                   <div class="row">
                       <div class="col-md-3"></div>
                           <div class="col-md-6">
                               <h6 class="pull-left"><input type="checkbox">Remeber me</h6>
                               <h6><a href="#" class="pull-right">Forgot Password</a></h6>
                       <div class="col-md-offset-6"></div>

                   </div>

                   </div>
           </div>
           <div class="col-md-offset-4"></div>
       </div>
    </div></div>


@endsection