<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link bg-kesmavet text-white">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Silawas</span>
    </a>
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-2 pb-2 d-flex">
            <div class="image mt-2">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info pt-0">
                <a href="#" class="d-block">
                    {{ Auth::user()->name }}
                </a>
                <a href="#" class="d-block">
                    <span class="text-kesmavet">Admin</span>
                </a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="sidebar-menu">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MENU UTAMA</li>
                <li class="nav-item">
                    <a href="/profile/{{ Auth::user()->id }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/petugas" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Petugas</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-edit"></i>
                        <p>
                            Pengajuan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pengajuan/formulir" class="nav-link">
                                <p>Formulir Pengajuan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengajuan" class="nav-link">
                                <p>Daftar Formulir</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">SISTEM</li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>Logout</p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>