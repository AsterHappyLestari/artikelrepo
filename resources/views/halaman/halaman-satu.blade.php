@extends('master')
@section('content')

<h4 class="card-title">Halaman Satu</h4>

@foreach($datamhs as $mh)
<div class="card">
    <div class="card-header">
    
        <h5 class="card-title">{{$mh->judul}}</h5>
        
    </div>
    <div class="card-body">
        <p class="card-text">{{$mh->abstrak}}</p>
    </div>
    <div class="card-footer d-sm-flex justify-content-between align-items-center">
        <div class="card-footer-link mb-4 mb-sm-0">
            <p class="card-text text-dark d-inline">Last updated 3 mins ago</p>
        </div>
            <a href="javascript:void()" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach

@endsection