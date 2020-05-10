<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- <link href="/css/app.css" rel="stylesheet">-->
            <link href="/css/bootstrap.css" rel="stylesheet">
            <link href="/css/home.css" rel="stylesheet">
            <link href="/css/font-awesome.css" rel="stylesheet">
            <link href="/css/categories.css" rel="stylesheet">
            <link rel="stylesheet" href="/css/aboutus.css">
            <link rel="stylesheet" href="/css/contactus.css">

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.js"></script>
        <title>{{config('app.name', 'SALES')}}</title>

    </head>
    <body>
    <div class="container container-fluid">
        @include('inc.navbar')




            <div class="container">

                <div class="col-md-offset-3" >
                @include('inc.messages')
                </div>

                <div class="container cont">
                @yield('content')
                </div>




    </div></div>
   @include('inc.footer')
    </body>
</html>