 <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color: #000000  !important;">
            <a href="index.html" class="brand-logo">
            <img src="{{asset('asset/images/logo-ti.png')}}" width="60" alt="">
				<span class="brand-title">TI Repo</span>

            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="background-color: #317AC7 !important;">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar"> 
                                <li class="breadcrumb-item"></li>
                            </div>
                        </div>
                        <div class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <div class="info">
                                    @if ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
                                        <a href="#" class="d-block text-white">{{ Auth::guard('mahasiswa')->user()->nama_mhs }}</a>
                                    @elseif ( Str::length(Auth::guard('user')->user()) > 0)
                                        <a href="#" class="d-block text-white">{{ Auth::guard('user')->user()->name }}</a>
                                    @endif
                                </div>
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                                        <img src="{{asset('asset/images/avatar/1.png')}}" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                        <a href="{{ route('profil')}}"class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                <span class="ml-2">Profile </span>
                                        </a>
                                        <a href="{{ route('logout')}}" class="dropdown-item ai-icon">
                                            <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                <span class="ml-2">Logout </span>
                                        </a>
                                </div>
                            </li>
                        </div>

                        
					</div>
                </nav>
                
            </div>
        </div>

        
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->