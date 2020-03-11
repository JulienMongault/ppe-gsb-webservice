<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	
        <title>@yield('title')</title>
        @stack('styles')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="icon" type="image/png" href="{{ route('gsb.root') }}/images/ico-gsb.png" />
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="{{ route('home') }}"><img class="logo-gsb" src="{{ route('gsb.root') }}/images/logo-gsb.png" /></a>
            &nbsp;
            @guest
            @else
                <a class="navbar-brand" href="{{ route('gsb.listRap') }}"><button type="button" class="btn btn-dark">Mes comptes rendus</button></a>
                &nbsp;
                <a class="navbar-brand" href="{{ route('gsb.listPra') }}"><button type="button" class="btn btn-dark">Liste des Praticiens</button></a>
                &nbsp;
                <a class="navbar-brand" href="{{ route('gsb.listVis') }}"><button type="button" class="btn btn-dark">Liste des Visiteurs</button></a>
            @endguest
            @if(Session::has('message'))
   				 <p class="alert alert-danger">{{ Session::get('message') }}</p>
			@endif
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            &nbsp;
        </nav>
        <div class="content">
            @yield('content')
        </div>
        

    </body>
</html>
