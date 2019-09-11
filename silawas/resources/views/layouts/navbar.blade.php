<nav class="main-header navbar navbar-expand navbar-dark bg-kesmavet">
    <!-- Left Navbar Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> -->
    </ul>
    <!-- Navbar Search -->
    <!-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> -->
    <!-- Right Navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">4 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li> -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle pr-2" data-toggle="dropdown">
                <img src="{{ asset('dist/img/user.png') }}" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline ml-1">{{ Auth::user()->username }} <i class="fas fa-caret-down ml-1"></i></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-header bg-kesmavet">
                    <img src="{{ asset('dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    <p>
                        {{ Auth::user()->username }}
                        <div>
                            @if (Auth::user()->accessRoleId == 1)
                                Administrator
                            @elseif (Auth::user()->accessRoleId == 2)
                                Admin Kesmavet
                            @elseif (Auth::user()->accessRoleId == 3)
                                Admin Dinas Prov
                            @elseif (Auth::user()->accessRoleId == 4)
                                Admin Dinas Kab/Kota
                            @elseif (Auth::user()->accessRoleId == 5)
                                Otovet
                            @elseif (Auth::user()->accessRoleId == 6)
                                Pelaku Usaha
                            @elseif (Auth::user()->accessRoleId == 7)
                                Petugas Kesmavet
                            @endif
                        </div>
                    </p>
                </li>
                <li class="user-footer">
                    <a href="/profile/{{ Auth::user()->id }}" class="btn btn-default btn-flat">Profile</a>
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>
    </ul>
</nav>