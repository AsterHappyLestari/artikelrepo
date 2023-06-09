@extends('master')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
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
                    @foreach($datajn as $key => $item)
                    <tr>
                        <td>{{$datajn->firstItem() + $key }}</td>
                        <td>{{$item->nama_penulis}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->judul}}</td>
                        <td>
                            <a href="{{ url('upload/'.$item->dokumen) }}" target="_blank" rel="noopener noreferrer">Lihat File</a>
                        </td>
                        <td class="text-left">
                        
                            <div class="ml-auto">
                                <a href="{{ route('jurnal.show',$item->id_jurnal) }}" class="btn btn-secondary btn-xs sharp"><i class="fa fa-eye"></i></a>   
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>
</div>
@endsection