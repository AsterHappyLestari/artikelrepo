@extends('master')
@section('content')

<div class="row">
    
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="images/profile/profile.png" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
                                        
										<div class="profile-name px-3 pt-2">
                                       
											<h4 class="text-primary mb-0">
											<div class="info">
												@if ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
													<a href="#" class="d-block text-black">{{ Auth::guard('mahasiswa')->user()->nama_mhs }}</a>
												@elseif ( Str::length(Auth::guard('user')->user()) > 0)
													<a href="#" class="d-block text-black">{{ Auth::guard('user')->user()->name }}</a>
												@endif
											</div>
											</h4>
                                           
											<p>UX / UI Designer</p>
										</div>
                                        
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0">
												<div class="info">
													@if ( Str::length(Auth::guard('mahasiswa')->user()) > 0)
														<a href="#" class="d-block text-black">{{ Auth::guard('mahasiswa')->user()->email }}</a>
													@elseif ( Str::length(Auth::guard('user')->user()) > 0)
														<a href="#" class="d-block text-black">{{ Auth::guard('user')->user()->email }}</a>
													@endif
												</div>
											</h4>
											<p>Email</p>
										</div>
										<div class="dropdown ml-auto">
											<a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
											<ul class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-169px, 30px, 0px);">
												<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
												<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
												<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
												<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
											</ul>
										</div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>

@endsection