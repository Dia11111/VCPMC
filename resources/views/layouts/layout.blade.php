<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
           VCPMC | @yield('title')
        </title>

        <script src="{{ asset('js/script.js') }}"></script>
        <!-- icon -->
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/components.css')}}">
        <link rel="stylesheet" href="{{asset('css/modal.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/playlist.css')}}"> --}}
        @yield('css')

    </head>
    <style>
        .group{
            width: 94%;
        }
    </style>
    <body>
        @include('components.navbar')
        <div class="container-web">       
                @include('components.topbar')
                @yield('content')
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @yield('script')
    </body>
</html>
