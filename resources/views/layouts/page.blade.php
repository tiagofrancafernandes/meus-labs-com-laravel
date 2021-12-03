@extends('layouts.app')

@section('layout-content')
<!-- Navbar -->
<nav class="navbar fixed-top_ navbar-expand-lg_ navbar-expand-md navbar-dark bg-dark shadow-sm">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ url('/') }}" title="{{ config('app.name', 'Laravel') }}">
                <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="15" alt=""
                    loading="lazy" />
            </a>

            <!-- Left links -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">
            <ul class="navbar-nav">
                @auth()
                <!-- Shortcuts -->
                <li class="nav-item dropdown mx-2">
                    <button class="btn btn-outline-info btn-rounded dropdown-toggle d-flex align-items-center"
                        type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                        @lang('Shortcuts')
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Account history</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                    </ul>
                </li>
                @endif

                <!-- notifications -->
                <li class="nav-item dropdown mx-2">
                    <button class="btn btn-outline-info btn-rounded dropdown-toggle d-flex align-items-center"
                        type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                        @lang('Shortcuts')
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Account history</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown mx-2">

                    <button class="btn btn-outline-info btn-rounded dropdown-toggle d-flex align-items-center"
                        type="button" id="dropdownMenuButton2" data-mdb-toggle="dropdown" aria-expanded="false">
                        @auth()
                        <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25"
                            alt="" loading="lazy" />
                        @else
                        @lang('Login')
                        @endauth
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="dropdown-item" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>

<div id="app">
    <main class="py-4">
        @yield('content')
    </main>
</div>
@endsection
