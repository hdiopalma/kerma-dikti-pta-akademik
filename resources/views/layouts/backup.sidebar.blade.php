<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img alt="Image placeholder" width="36" height="36" src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3"> @if(auth()->user()->id_level == '1') Admin @endif  @if(auth()->user()->id_level == '2') Universitas @endif  <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if(auth()->user()->id_level == 1)
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('universitas') }}">
        <i class="fas fa-fw fa-cog"></i>
            <span>Data Universitas</span></a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.proposal') }}">
        <i class="fas fa-fw fa-cog"></i>
            <span>Data Proposal</span></a>
    </li>

    @endif

    <!--
    @if(auth()->user()->id_level == 1)
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-fw fa-folder"></i>
            <span>kategori Universitas</span></a>
    </li>
    @endif
    -->

    @if(auth()->user()->id_level == 2)
    <li class="nav-item active">
        <a class="nav-link" href="#warningModal" data-toggle="modal" data-target="#warningModal">
            <i class="fas fa-fw fa-folder"></i>
            <span>Penanggung Jawab PT</span></a>
    </li>
    @endif

    @if(auth()->user()->id_level == '2')
    <li class="nav-item active">
        <a class="nav-link" href="#warningModal" data-toggle="modal" data-target="#warningModal">
            <i class="fas fa-database"></i>
            <span>Pelaporan Kerja Sama</span></a>
    </li>
    @endif

    @if(auth()->user()->id_level == '2')
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('proposal') }}">
            <i class="fas fa-plus-circle"></i>
            <span>Pengajuan Ijin Kerja Sama</span></a>
    </li>
    @endif

    @if(auth()->user()->id_level == '2')
    <li class="nav-item active">
        <a class="nav-link" href="#warningModal" data-toggle="modal" data-target="#warningModal">
            <i class="fas fa-cog"></i>
            <span>Pengaturan</span></a>
    </li>
    @endif

    @if(auth()->user()->id_level == '2')
    <li class="nav-item active">
        <a class="nav-link" href="{{  route('logout') }}">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>
    @endif
       <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

