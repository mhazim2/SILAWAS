<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link bg-kesmavet text-white">
        <img src="{{ asset('img/backkesmavet3.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-bold">Silawas</span>
    </a>
    <div class="sidebar">
        <!-- User Panel -->
        <div class="user-panel mt-2 pb-2 d-flex">
            <div class="image mt-2">
                <img src="{{ asset('dist/img/user.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info pt-0">
                <a href="#" class="d-block">
                    {{ Auth::user()->username }}
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
                    <a href="/" class="nav-link @yield('Home')">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profile/{{ Auth::user()->id }}" class="nav-link @yield('Profile')">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <?php 
                    if(View::hasSection('Daftar Petugas') || View::hasSection('Tambah Petugas')) {
                        $petugas_treeview_class = 'menu-open';
                        $petugas_nav_link_class = 'active';
                    } else {
                        $petugas_treeview_class = '';
                        $petugas_nav_link_class = '';
                    }
                ?>
                <li class="nav-item has-treeview {{ $petugas_treeview_class }}">
                    <a href="#" class="nav-link {{ $petugas_nav_link_class }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Petugas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/petugas" class="nav-link @yield('Daftar Petugas')">
                                <p>Daftar Petugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/petugas/create" class="nav-link @yield('Tambah Petugas')">
                                <p>Tambah Petugas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php 
                    if(View::hasSection('Daftar Unit Usaha') || View::hasSection('Tambah Unit Usaha')) {
                        $unitusaha_treeview_class = 'menu-open';
                        $unitusaha_nav_link_class = 'active';
                    } else {
                        $unitusaha_treeview_class = '';
                        $unitusaha_nav_link_class = '';
                    }
                ?>
                <li class="nav-item has-treeview {{ $unitusaha_treeview_class }}">
                    <a href="#" class="nav-link {{ $unitusaha_nav_link_class }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Unit Usaha
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/unit-usaha" class="nav-link @yield('Daftar Unit Usaha')">
                                <p>Daftar Unit Usaha</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/unit-usaha/create" class="nav-link @yield('Tambah Unit Usaha')">
                                <p>Tambah Unit Usaha</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php 
                    if(View::hasSection('Daftar Formulir') || View::hasSection('Formulir Pengajuan')) {
                        $pengajuan_treeview_class = 'menu-open';
                        $pengajuan_nav_link_class = 'active';
                    } else {
                        $pengajuan_treeview_class = '';
                        $pengajuan_nav_link_class = '';
                    }
                ?>
                <li class="nav-item has-treeview {{ $pengajuan_treeview_class }}">
                    <a href="#" class="nav-link {{ $pengajuan_nav_link_class }}">
                        <i class="nav-icon far fa-edit"></i>
                        <p>
                            Pengawasan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pengajuan" class="nav-link @yield('Daftar Formulir')">
                                <p>Daftar Formulir</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pengajuan/formulir" class="nav-link @yield('Formulir Pengawasan')">
                                <p>Formulir Pengawasan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link @yield('Laporan')">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>Laporan</p>
                    </a>
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