 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            {{-- <img src="{{ asset('src/logo/logo.png') }}" alt="" width="100px"> --}}
        </div>
        <div class="sidebar-brand-text mx-3">MI An Najiyah</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('datasiswa.index') }}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Data Siswa</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('databerkas.index') }}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Data Berkas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
        Setting
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('profile.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('manageAccount.index') }}">
            <i class="fas fa-fw fa-user"></i>
            <span>Manage Account</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
