<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body >
    <div id="app">
       <div class="top-header">
            <div class="">
                <nav class="navbar has-shadow">
                    <div class="container is-fluid">
                        <div class="navbar-start">
                            <a href="{{ route('home') }}" class="navbar-item">
                                <img src="https://bulma.io/images/bulma-logo.png" alt="DevClub.png" />
                            </a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Discuess</a>
                            <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                        </div>
                        <div class="navbar-end">
                            @if(Auth::guest())
                                <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                                <a href="{{ route('register') }}" class="navbar-item is-tab">Join The Community</a>
                            @else
                                <button class="is-tab dropdown navbar-item">
                                    Hey Arnold <span class="icon"><i class="fa fa-caret-down"></i></span>

                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="icon"><i class="fa fa-user-circle-o m-r-10"></i></span> Profile</a></li>
                                        <li><a href="#"><span class="icon"><i class="fa fa-bell m-r-10"></i></span>Notification</a></li>
                                        <li><a href="#"><span class="icon"><i class="fa fa-cog m-r-10"></i></span>Settings</a></li>
                                        <li class="seperator"></li>
                                        <li><a href="#"><span class="icon"><i class="fa fa-sign-out m-r-10"></i></span>Logout</a></li>
                                    </ul>
                                </button>
                            @endif
                        </div>
                    </div>
                </nav> 
            </div>
       </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
