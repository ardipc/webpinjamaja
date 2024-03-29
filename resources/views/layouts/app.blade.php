<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('tema/css/style.css') }}">

    @if (Request::is('/'))
        <link rel="stylesheet" href="{{ asset('tema/css/app.css') }}">
    @elseif (Request::is('activity') || Request::is('notification'))
        <link rel="stylesheet" href="{{ asset('tema/css/activity.css') }}">
    @elseif (Request::is('investation'))
        <link rel="stylesheet" href="{{ asset('tema/css/investation.css') }}">
    @elseif (Request::is('account'))
        <link rel="stylesheet" href="{{ asset('tema/css/account.css') }}">
    @endif


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        
        <div class="nav">
            <a href="#">
                <img src="{{ asset('tema/img/logo-pinjemaja.png') }}">
            </a>
        </div>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="bottom-menu">
            <a class="menu-link" href="{{ url('/') }}">
                <div id="home-menu" class="menu">
                    <div class="menu-icon">
                        @if(Request::is('/'))
                            <img src="{{ asset('tema/img/home-icon.png') }}">
                        @else
                            <img src="{{ asset('tema/img/home-icon-grey.png') }}">
                        @endif
                    </div>
                    <div class="menu-text">
                        <span>Home</span>
                    </div>
                </div>
            </a>
            
            <a class="menu-link" href="{{ url('/activity') }}">
                <div id="activity-menu" class="menu">
                    <div class="menu-icon">
                        @if(Request::is('activity'))
                            <img src="{{ asset('tema/img/activity-icon.png') }}">
                        @else
                            <img src="{{ asset('tema/img/activity-icon-grey.png') }}">
                        @endif
                    </div>
                    <div class="menu-text">
                        <span>Activity</span>
                    </div>
                </div>
            </a>
            
            <a class="menu-link" href="{{ url('/investation') }}">
                <div id="investation-menu" class="menu">
                    <div class="menu-icon">
                        @if(Request::is('investation'))
                            <img src="{{ asset('tema/img/investation-icon.png') }}">
                        @else
                            <img src="{{ asset('tema/img/investation-icon-grey.png') }}">
                        @endif
                    </div>
                    <div class="menu-text">
                        <span>Investation</span>
                    </div>
                </div>
            </a>
            
            <a class="menu-link" href="{{ url('/notification') }}">
                <div id="notif-menu" class="menu">
                    <div class="menu-icon">
                        @if(Request::is('notification'))
                            <img src="{{ asset('tema/img/notif-icon.png') }}">
                        @else
                            <img src="{{ asset('tema/img/notif-icon-grey.png') }}">
                        @endif
                    </div>
                    <div class="menu-text">
                        <span>Notification</span>
                    </div>
                </div>
            </a>
            
            <a class="menu-link" href="{{ url('/account') }}">
                <div id="account" class="menu">
                    <div class="menu-icon">
                        @if(Request::is('account'))
                            <img src="{{ asset('tema/img/account-icon.png') }}">
                        @else
                            <img src="{{ asset('tema/img/account-icon-grey.png') }}">
                        @endif
                    </div>
                    <div class="menu-text">
                        <span>Account</span>
                    </div>
                </div>
            </a>
        </div>

    </div>
</body>
</html>
