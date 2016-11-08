<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    @yield('meta')

    <title>
        @section('title')
            StreamFrame
        @show
        {{--@yield('title', 'Laravel')--}}

    </title>

    <!-- Bootstrap Core CSS -->




    {!! Html::style('assests/css/bootstrap.min.css') !!}
    {!! Html::style('assests/css/bootstrap-theme.css') !!}
    {!! Html::style('assests/css/font-awesome.min.css') !!}
    {!! Html::style('assests/css/jquery.validate.css') !!}



    @yield('styles')

    <!-- Custom CSS -->

    {!! Html::style('assests/css/simple-sidebar.css') !!}




    {!! Html::script('assests/js/respond.min.js') !!}
    {!! Html::script('assests/js/html5shiv.js') !!}


    <!-- jQuery -->



    {!! Html::script('assests/js/jquery.min.js') !!}
    {!! Html::script('assests/js/jquery.validate.js') !!}
    {!! Html::script('assests/js/jquery.validation.functions.js') !!}
    {!! Html::script('assests/js/audio.js') !!}

    @yield('scripts')


    <!-- Bootstrap Core JavaScript -->


    {!! Html::script('assests/js/bootstrap.min.js') !!}


    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>





</head>


