<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- <link href="/css/app.css" rel="stylesheet">-->
            <link href="/css/bootstrap.css" rel="stylesheet">
            <link href="/css/mainSign.css" rel="stylesheet">

            <link href="/css/global.css" type="text/css" rel="stylesheet">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.js"></script>
        <title>{{config('app.name', 'SALES')}}</title>

    </head>
    <body>
    <div class="container-fluid bg">
                @yield('content1')
    </div>



    </body>
</html>