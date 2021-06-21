<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('/AdminLTE/dist/img/siwo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIWO</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (auth()->user()->level=="admin")
                <img src="{{asset('/AdminLTE/dist/img/Admin.jpg')}}" class="img-circle elevation-2" alt="User Image">
                @endif
                @if (auth()->user()->level=="user")
                <img src="{{asset('/AdminLTE/dist/img/User.jpg')}}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('beranda') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Beranda
                        </p>
                    </a>

                </li>
                @if (auth()->user()->level=="user")
                <li class="nav-item">
                    <a href="{{ route('pekerjaan') }}" class="nav-link">
                        <i class="nav-icon fas fa-pencil-alt"></i>
                        <p>
                            Pekerjaan
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ route('pekerjaanAdmin') }}" class="nav-link">
                        <i class="nav-icon fas fa-pencil-alt"></i>
                        <p>
                            Pekerjaan
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ route('pekerja') }}" class="nav-link">
                        <i class="nav-icon fas fa-running"></i>
                        <p>
                            Pekerja
                        </p>
                    </a>
                </li>
                @endif
                @if (auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ route('pengguna') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengguna
                        </p>
                    </a>

                </li>
                @endif
                @if (auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ route('unit') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Unit Kerja
                        </p>
                    </a>

                </li>
                @endif
                @if (auth()->user()->level=="admin")
                <li class="nav-item">
                    <a href="{{ route('rekap-pekerjaan') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan Pekerjaan
                        </p>
                    </a>

                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Log Out
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>