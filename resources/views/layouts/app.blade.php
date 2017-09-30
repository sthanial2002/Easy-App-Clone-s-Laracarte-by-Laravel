
<!DOCTYPE html>
<html lang="">
    <head>
         <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title> {{ page_title(($title) ? $title : '') }} </title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">

        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> 
        <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    </head>
    <body>
        @include('layouts/partials/_nav')

        @yield('content')
                
        @include('layouts/partials/_footer')




        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.min.js"></script>
        
        @include('flashy::message')


        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>

       
    </body>
</html>