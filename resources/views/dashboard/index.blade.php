@extends('master')
@section('title')
    {{'Dashboard'}}
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render('dashboard.index') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-4">
        <div class="widget-stat card bg-primary">
                <div class="card-body  p-4">
                    <div class="media">
                        <span class="mr-3">
                            <i class="flaticon-381-folder"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Artikel</p>
                            <h3 class="text-white">{{ $jur }}</h3>
                            <div class="progress mb-2 bg-secondary">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                                </div>
                            <small></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="widget-stat card bg-primary">
            <div class="card-body  p-4">
                <div class="media">
                    <span class="mr-3">
                        <i class="la la-users"></i>
                    </span>
                    <div class="media-body text-white">
                        <p class="mb-1">Total User</p>
                        <h3 class="text-white">{{ $user }}</h3>
                        <div class="progress mb-2 bg-secondary">
                            <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                            </div>
                        <small></small>
                    </div>
                </div>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="widget-stat card bg-primary">
                <div class="card-body  p-4">
                    <div class="media">
                        <span class="mr-3">
                            <i class="la la-graduation-cap"></i>
                        </span>
                        <div class="media-body text-white">
                            <p class="mb-1">Total Mahasiswa</p>
                            <h3 class="text-white">{{ $mhs }}</h3>
                            <div class="progress mb-2 bg-secondary">
                                <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                                </div>
                            <small></small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection