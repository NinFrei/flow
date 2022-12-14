<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title-block')</title>


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/jpg" href="img/Logo.jpg" />

        <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">



        <!-- Styles -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/customstyles.scss') }}" rel="stylesheet" type="text/css">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">

        <title>@yield('title-blok')</title>
    </head>
            @include('inc.header')
    <body>
            @yield('content')
            @yield ('beauty')
            @yield('home')
            @yield('modetrends')
            @yield('shop')
            @yield('empowerment')
            @yield('lifestyle')
            @yield('aboutme')
            @yield('contact')
            <div class="col-8">
                             
                         <h1><a href="/messages">@yield('title')</a></h1>
                         @include('inc.message1') 

                         <!-- @if (Request::is('/contact')) -->
                         @include('inc.text')
                         @endif
                         
                   
    
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="container-fluid mt-5">

                <div class="container-XXL">
                            
                                <div class="row">

                                        <div class="col-8">
                                            @yield('content')
                                            <h1><a href="/messages">@yield('title')</a></h1>
                                            @include('inc.message1') 
                                            @if (Request::is('/contact'))
                            @include('inc.text')
                                            @endif
                            
                                        </div>
                                


                                        <div class="col-4"></div>

                                </div>
                            </div>
                        </div>

                    </div>


            </div>  
            <!-- @include('inc.footer') <b>Dummy
            Footer:{{ date('d.m.Y') }}</b> -->

    
    </body>

    @include('inc.footer') <b></b> 
</html>
