@extends('master')

@section('breadcrumb')
    {{ Breadcrumbs::render('jurnal.show/{id_jurnal}') }}
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                    <h4 class="card-title">Detail Jurnal</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <a href="{{ url('jurnal') }}"class="btn btn-rounded btn-primary">
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
                                    <th>Nama Penulis</th>
                                    <td>{{ $jurnal->nama_penulis }}</td>
                                </tr>
                                <tr>
                                    <th>Kategori</th>
                                    <td>{{ $jurnal->kategori->kategori }}</td>
                                </tr>
                                <tr>
                                    <th>Judul</th>
                                    <td>{{ $jurnal->judul }}</td>
                                </tr>
                                <tr>
                                    <th>Abstrak</th>
                                    <td>{{ $jurnal->abstrak }}</td>
                                </tr>
                                <tr>
                                    <th>Kata Kunci</th>
                                    <td>{{ $jurnal->katakunci }}</td>
                                </tr>
                                <tr>
                                    <th>File</th>
                                    <td><a href="{{ url('upload/'.$jurnal->dokumen) }}" target="_blank" rel="noopener noreferrer">Download</a></td>
                                </tr>
                                <tr>
                                    <th>Referensi</th>
                                    <td>{{ $jurnal->referensi }}</td>
                                </tr>
                                <tr>
                                    <th>Tautan</th>
                                    <td>{{ $jurnal->tautan }}</td>
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