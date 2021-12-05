<!--Main Navigation-->
<header>
    <x-mdb-sidebar-menu />

    @php
    $theme_dark = false;
    @endphp
    <!-- Navbar -->
    <nav id="main-navbar"
        class="navbar navbar-expand-lg navbar-{{ $theme_dark ? 'dark' : 'light' }} bg-{{ $theme_dark ? 'dark' : 'white' }} fixed-top">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Brand -->
            <a class="navbar-brand" href="#">
                <x-logo-icon-code dark="{{ $theme_dark ? 'true' : 'false' }}" />
            </a>
            {{--
            <!-- Search form -->
            <form class="d-none d-md-flex input-group w-auto my-auto">
                <input autocomplete="off" type="search" class="form-control rounded"
                    placeholder="Search (ctrl + &quot;/&quot; to focus)" style="min-width: 225px">
                <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
            </form> --}}

            <!-- Right links -->
            <ul class="navbar-nav ms-auto d-flex flex-row">
                <x-mdb-main-nav-notification />

                <x-mdb-main-nav-team-switch />

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#"
                        data-mdb-toggle="tooltip"
                        data-mdb-html="true"
                        data-mdb-placement="bottom"
                        title="@lang('Change theme')"
                    >
                        <i class="fas fa-fill-drip"></i>
                    </a>
                </li>

                <!-- Icon -->
                <li class="nav-item">
                    <a class="nav-link me-3 me-lg-0" href="#"
                        data-mdb-toggle="tooltip"
                        data-mdb-html="true"
                        data-mdb-placement="bottom"
                        title="@lang('Dark mode')"
                    >
                        <i class="fas fa-adjust"></i>
                    </a>
                </li>

                <!-- Avatar -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
                        id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown"
                        aria-expanded="false"
                        style="min-width: 2rem;">
                        <img  class="rounded-circle" alt="" loading="lazy"
                            src="@sessionExists('user-avatar') @session('user-avatar') @else @asset('images/default-avatar.png') @endsessionExists"
                            height="22">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>
<!--Main Navigation-->
