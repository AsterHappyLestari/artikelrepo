@extends('master')
@section('title')
    {{'Jurnal'}}
    
@endsection
@section('breadcrumb')
    {{ Breadcrumbs::render('jurnal') }}
@endsection
@section('content')


<div class="col-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
        <strong>Success</strong>  {{ $message }}
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
        <!-- {{Breadcrumbs::render('jurnal')}} -->
            <h4 class="card-title">List Journal</h4>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                            <a href="{{ route('jurnal.create') }}" class="btn btn-rounded btn-info">
                            <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                    </span>Add Journal</a>
                    </div>
                </div> 
        </div>

        <div class="card-body">
            
                    <!-- <div class="col-md-6">
                        <form method="POST" action="{{ route('jurnal.search') }}">
                        @csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input type="text" name="cari" class="form-control" placeholder="Ketikan sesuatu">
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>    -->
            
            <div class="table-responsive">
                <table class="table table-bordered verticle-middle table-responsive-sm data-tables">
                    <thead class="thead-info">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Judul</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $item)
                    <tr>
                        <td>{{$data->firstItem() + $key }}</td>
                        <td>{{$item->nama_penulis}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->judul}}</td>
                        <td>
                            <a href="{{ url('upload/'.$item->dokumen) }}" target="_blank" rel="noopener noreferrer">Lihat File</a>
                        </td>
                        <td class="text-left">
                        
                            <div class="ml-auto">
                            
                                <a href="{{ route('jurnal.edit',$item->id_jurnal) }}" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('jurnal.show',$item->id_jurnal) }}" class="btn btn-secondary btn-xs sharp"><i class="fa fa-eye"></i></a>
                                
                                <form action="{{ route('jurnal.destroy',$item->id_jurnal) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <a href="{{ url('jurnal/destroy',$item->id_jurnal) }}" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                </form>
                               
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            
                    <!-- <div class="pull-left">
                        Showing
                        {{ $data->firstItem() }}
                        to
                        {{ $data->lastItem() }}
                        of
                        {{ $data->total() }}
                        entries
                    </div>
                    <div class="pull-right">
                        {{ $data->links() }}
                    </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
