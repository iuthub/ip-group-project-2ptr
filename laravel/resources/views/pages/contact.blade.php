@extends('layouts.app_extra')

@section('content')
    <div class="row marginMinus">
        <h1 class="text-center">CONTACT</h1>

            <div class="col-md-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Tashkent, Uzbekistan</p>
                <p><span class="glyphicon glyphicon-phone"></span> +998934419024</p>
                <p><span class="glyphicon glyphicon-envelope"></span> 100214</p>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

        </div>





@endsection