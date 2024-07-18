<aside class="main-sidebar" style="background-color: #367fa9; color: #E0E0E0;">
    <!-- Brand Logo -->
    @if (config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex"> --}}
            <div class="info text-center">
                <h5 style="color: #E0E0E0;">Nama Lengkap</h5>
                <h6 style="color: #E0E0E0;">Admin</h6>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link" style="color: #E0E0E0;">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <!-- Additional menu items if needed -->
                <li class="nav-item">
                    <a href="{{ route('reports') }}" class="nav-link" style="color: #E0E0E0;">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Laporan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('users.index') }}" class="nav-link" style="color: #E0E0E0;">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan data admin
                        </p>
                    </a>
                </li>
                <!-- Logout Button -->
                <li class="nav-item mt-auto">
                    {{-- <a href="{{ route('logout') }}" class="nav-link" style="color: white;" --}}
                    <a href="#" class="nav-link" style="color: white;"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form> --}}
                    <form id="logout-form" action="{{ route('logout') }}" style="display: none;">
                        {{-- {{ route('logout') }} --}}
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<style>
    .main-sidebar .user-panel {
        padding: 10px 10px;
        margin-bottom: 0;
    }
</style>
