<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav" style="background-color: #000000 !important;">
            <div class="deznav-scroll">
                
				<ul class="metismenu" id="menu">
                    <!-- <div class="info">
                        @if ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
                            <a href="#" class="d-block">{{ Auth::guard('mahasiswa')->user()->nama_mhs }}</a>
                        @elseif ( Str::length(Auth::guard('user')->user()) > 0)
                            <a href="#" class="d-block">{{ Auth::guard('user')->user()->name }}</a>
                        @endif
                    </div> -->

                    @if (Str::length(Auth::guard('user')->user()) > 0)
                    @if (Auth::guard('user')->user()->level = "admin")
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-home-2"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
						</ul> 
                    </li>
                    @endif
                    @endif

                    @if (Str::length(Auth::guard('user')->user()) > 0)
                    @if (Auth::guard('user')->user()->level = "admin")
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-user-9"></i>
							<span class="nav-text">Users</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dosen.index') }}">Dosen</a></li>
						</ul>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('mahasiswa.index')}}">Mahasiswa</a></li>
						</ul>
                    </li>
                    @endif
                    @endif

                    <!-- @if (Str::length(Auth::guard('user')->user()) > 0)
                    @if (Auth::guard('user')->user()->level = "admin")
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Mahasiswa</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('mahasiswa.index')}}">List Data Mahasiswa</a></li>
						</ul>
                    </li>
                    @endif
                    @endif -->

                    @if (Str::length(Auth::guard('user')->user()) > 0)
                    @if (Auth::guard('user')->user()->level = "admin")
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    
							<i class="flaticon-381-list-1"></i>
							<span class="nav-text">Repository</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('jurnal.index')}}">List Jurnal</a></li>
						</ul>
                    </li>
                    @endif
                    @endif

                    @if (Str::length(Auth::guard('mahasiswa')->user()) > 0)
                    @if (Auth::guard('mahasiswa')->user()->level = "mhs")
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Halaman Mhs</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('halaman-satu') }}">Halaman Satu</a></li>
						</ul>
                       
                        <ul aria-expanded="false">
                            <li><a href="{{ url('halaman-dua') }}">Halaman Dua</a></li>
						</ul>  
                    </li>
                    @endif
                    @endif

                    <!-- <li><a  href="{{ route('logout')}}" aria-expanded="false">
                        <i class="fa fa-arrow-up-left-from-circle"></i>
                        <span class="nav-text">Logout</span>
						</a>
                    </li> -->
                </ul>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->