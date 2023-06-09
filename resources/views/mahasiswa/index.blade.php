@extends('master')
@section('title')
@endsection
@section('breadcrumb')
{{ Breadcrumbs::render('mahasiswa') }}
@endsection
@section('content')

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

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">List Mahasiswa</h4>
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a href="{{ route('mahasiswa.create') }}" class="btn btn-rounded btn-info">
                            <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add Mahasiswa</a>
                    </div>
                </div> 
        </div>

        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-striped table-responsive-sm data-tables" id="example5">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No Telepon</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Email</th>
                        <th scope="col">Program Studi</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $no => $item)
                        <tr>
                        <th scope="row">{{$no+1}}</th>
                            <td>{{$item->nim}}</td>
                            <td>{{$item->nama_mhs}}</td>
                            <td>{{$item->jenisk}}</td>
                            <td>{{$item->notelp_mhs}}</td>
                            <td>{{$item->alamat_mhs}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->prodi}}</td>
                            <td>
                                <div class="ml-auto">
                                    <a href="{{ route('mahasiswa.edit',$item->id_mhs) }}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('mahasiswa.show',$item->id_mhs) }}" class="btn btn-secondary btn-xs sharp"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('mahasiswa/destroy',$item->id_mhs) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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

