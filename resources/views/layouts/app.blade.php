<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Writeit' }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("lib/css/bootstrap.min.css")}}">
    <!-- Bootstrap Icons -->
    {{-- <link rel="stylesheet" href="{{asset("lib/css/bootstrap-icons.min.css")}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Custom CSS -->
    {{-- fivicon --}}
    @guest   
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('imgs/favicon_guest.ico') }}" type="image/x-icon">
    @endguest
    @auth
    <link rel="icon" href="{{ asset('imgs/favicon_auth.ico') }}" type="image/x-icon">
    @endauth
    @yield('style')

</head>
<body>
    <!-- Include Navbar -->
    @hasSection('hide-navbar')
    {{-- Do not include any navbar --}}
    @else
        @guest
            @include('partials.navbar')
        @endguest
        @auth
            @include('partials.navbar-Authed')    
        @endauth
    @endif

    <!-- Dynamic Content -->
    @yield('content')

    
    @guest   
    <!-- Include Contact Modal -->
    @include('partials.contact-modal')  
    <!-- Include Footer -->
    @include('partials.footer')
    @endguest

    <!-- Bootstrap JS -->
    <script src="{{asset("lib/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("lib/js/jquery-3.6.0.min.js")}}"></script>
    @vite(['resources/js/app.js'])
    <!-- Custom Scripts -->
    @yield('scripts')
</body>
</html>