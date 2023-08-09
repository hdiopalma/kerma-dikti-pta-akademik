<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index3.html" class="brand-link" style="text-decoration: none">
        <img src="{{ asset('Login_Dikti_files/logo_ristekdikti.png') }}" alt="RISTEKDIKTI Logo"
            class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-bold">
            @if (auth()->user()->id_level == '1')
                Admin
            @elseif (auth()->user()->id_level == '2')
                Universitas
            @elseif (auth()->user()->id_level == '3')
                Reviewer
            @elseif (auth()->user()->id_level == '4')
                Verifikator
            @endif
        </span>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (auth()->user()->id_level == 1)
                    <li class="nav-item">
                        <a href="{{ route('universitas') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Data Universitas</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.proposal') }}" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>Data Proposal Kerja Sama</p>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->id_level == 2)
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Penanggung Jawab PT</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-database"></i>
                            <span>Pelaporan Kerja Sama</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('proposal') }}">
                            <i class="fas fa-plus-circle"></i>
                            <span>Pengajuan Ijin Kerja Sama</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-cog"></i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->id_level == 4)
                    <li class="nav-item">
                        <a href="{{route('verifikator.proposal')}}" class="nav-link">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Data Proposal Kerjasama</span>
                        </a>
                    </li>
                @endif

                @if (auth()->user()->id_level == 3)
                    <li class="nav-item">
                        <a href="{{route('reviewer.proposal')}}" class="nav-link">
                            <i class="fas fa-fw fa-folder"></i>
                            <span>Data Proposal Kerjasama</span>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
