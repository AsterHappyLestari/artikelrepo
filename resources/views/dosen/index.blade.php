@extends('master')
@section('content')
@section('breadcrumb')
{{ Breadcrumbs::render('dosen') }}
@endsection
<div class="col-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        <strong>Succes</strong>  {{ $message }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
            <span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif

    @if ($message = Session::get('update'))  
    <div class="alert alert-secondary alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
        <strong>Done!</strong>  {{ $message }}
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close">
            <span><i class="mdi mdi-close"></i></span>
        </button>
    </div>
    @endif
</div>

<div class="col-24">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Dosen</h4>
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a href="{{ route('dosen.create') }}" class="btn btn-rounded btn-info">
                            <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add Dosen</a>
                    </div>
                </div> 
        </div>
        <div class="card-body">
            <div class="table-responsive table-hover fs-14">
                <table class="table display mb-4 dataTablesCard data-tables" id="example5">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $no => $item)
                    <tr>
                        <th scope="row">{{$no+1}}</th>
                        <td>{{$item->nip}}</td>
                        <td>{{$item->nama_dosen}}</td>
                        <td>{{$item->jenisk}}</td>
                        <td>{{$item->notelp_dosen}}</td>
                        <td>{{$item->alamat_dosen}}</td>
                        <td>{{$item->email}}</td>
                        <td class="py-2 text-right">
                            <div class="dropdown"><button class="btn btn-primary tp-btn-light sharp" type="button" data-toggle="dropdown"><span class="fs--1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                <div class="dropdown-menu dropdown-menu-right border py-0">
                                    <div class="py-2"><a class="dropdown-item"  href="{{ route('dosen.edit',$item->id_dosen) }}">Edit</a>
                                    <a class="dropdown-item text-secondary" href="{{ route('dosen.show',$item->id_dosen) }}">Detail</a>
                                    <a class="dropdown-item text-danger" href="{{ url('dosen/destroy',$item->id_dosen) }}">Delete</a>
                                </div>
                                </div>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                    @include('sweetalert::alert')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection