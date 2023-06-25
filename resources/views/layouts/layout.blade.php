<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
           VCPMC | @yield('title')
        </title>

        <script src="{{ asset('js/script.js') }}"></script>
        <!-- Fonts -->
        <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('fonts/Montserrat-Regular.ttf') }}">
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <script src="https://kit.fontawesome.com/c71231073e.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <link rel="stylesheet" href="{{asset('css/modal.css')}}">
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="stylesheet" href="{{asset('css/playlist.css')}}">

    </head>
    <body>
        
        <div class="container-web">
            @include('components.navbar')
            <div class="content-web">
                @include('components.topbar')
                @yield('content')
            </div>
        </div>
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
        @yield('script')
    </body>
</html>
