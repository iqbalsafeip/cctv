       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-video"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Dashboard CCTV </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        @can('admin')
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin') }}">
                <i class="fas fa-fw fa-video"></i>
                <span>Dashboard CCTV</span></a>
        </li>
        @elsecan()
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('admin') }}">
                <i class="fas fa-fw fa-video"></i>
                <span>Dashboard CCTV</span></a>
        </li>
        @endcan
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Profil Instansi
        </div>

        <!-- Nav Item - Tambah CCTV -->
        <li class="nav-item">
            <a class="nav-link" href="{{ url('admin/profile-instansi') }}">
            <i class="fas fa-home"></i>
            <span>Diskominfo</span></a>
        </li>
        

        <!-- Heading -->
        <div class="sidebar-heading">
            Admin
        </div>

        <!-- Nav Item - list Admin -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-user"></i>
            <span>List Admin</span></a>
        </li>

        <!-- Nav Item - Tambah Admin -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.create') }}">
            <i class="fas fa-user-plus"></i>
            <span>Tambah Admin</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            CCTV
        </div>

        <!-- Nav Item - List CCTV -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cctv.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>List CCTV</span></a>
        </li>

        <!-- Nav Item - Tambah CCTV -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('cctv.create') }}">
            <i class="fas fa-fw fa-plus"></i>
            <span>Tambah CCTV</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Info Lalulintas
        </div>

        <!-- Nav Item - List CCTV -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('info_lalulintas.index') }}">
            <i class="fas fa-fw fa-list"></i>
            <span>List Info</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
        

    </ul>
    <!-- End of Sidebar -->

    {{-- <!-- Nav Item - Dashboard -->
    @can('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @endcan

    @can('user')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>  
    @elseCan('admin')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>User Dashboard</span></a>
    </li>
    @endCan --}}
