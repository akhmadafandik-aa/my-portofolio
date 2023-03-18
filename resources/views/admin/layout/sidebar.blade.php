<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
        <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
            <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="" target="_blank">
                <img src="{{ asset('assets/admin') }}/assets/img/profile/{{ Auth::user()->avatar }}" class="avatar avatar-sm navbar-brand-img h-100" alt="main_logo">
                {{-- <div class="my-auto">
                    <img src="{{url('assets/admin/assets/img/team-2.jpg')}}" class="avatar avatar-sm  me-3 ">
                </div> --}}
                {{-- <span class="ms-1 font-weight-bold">Argon Dashboard 2</span> --}}
                <span class="ms-1 font-weight-bold">{{ Auth::user()->name }}</span>
            </a>
            </div>
            <hr class="horizontal dark mt-0">
            <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
                <ul class="navbar-nav">
                {{-- <li class="nav-item">
                <a class="nav-link active" href="">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
                </li> --}}
                <li class="nav-item">
                <a class="nav-link " href="{{ route('halaman.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Halaman</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('experience.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Experience</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('education.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Education</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('skill.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Skill</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('profile.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
                </li>
                <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Pengaturan</h6>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="{{ route('pengaturanhalaman.index') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-single-copy-04 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Pegturan Halman</span>
                </a>
                </li>
                
                {{-- <li class="nav-item">
                <a class="nav-link " href="">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sign Up</span>
                </a>
                </li> --}}
            </ul>
            </div>
        </aside>