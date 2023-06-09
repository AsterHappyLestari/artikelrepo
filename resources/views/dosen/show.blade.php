@extends('master')

@section('breadcrumb')
    {{ Breadcrumbs::render('dosen.show/{id_dosen}') }}
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                    <h4 class="card-title">Detail Dosen</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <a href="{{ url('dosen') }}"class="btn btn-rounded btn-primary">
                                <span class="btn-icon-left text-info"><i class="fa fa-reply color-info"></i>
                                    </span>Back</a>
                        </div>
                    </div> 
               
            </div>

            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-striped verticle-middle">
                            <tbody>
                                <tr>
                                    <th>NIM</th>
                                    <td>{{ $dos->nip }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $dos->nama_dosen }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $dos->jenisk }}</td>
                                </tr>
                                <tr>
                                    <th>No Telp</th>
                                    <td>{{ $dos->notelp_dosen }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $dos->alamat_dosen }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $dos->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection