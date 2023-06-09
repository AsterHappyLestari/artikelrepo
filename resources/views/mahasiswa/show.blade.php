@extends('master')

@section('breadcrumb')
    {{ Breadcrumbs::render('mahasiswa.show/{id_mhs}') }}
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                
                    <h4 class="card-title">Detail Mahasiswa</h4>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                <a href="{{ url('mahasiswa') }}"class="btn btn-rounded btn-primary">
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
                                    <td>{{ $mahasiswa->nim }}</td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{ $mahasiswa->nama_mhs }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Kelamin</th>
                                    <td>{{ $mahasiswa->jenisk }}</td>
                                </tr>
                                <tr>
                                    <th>No Telp</th>
                                    <td>{{ $mahasiswa->notelp_mhs }}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{ $mahasiswa->alamat_mhs }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $mahasiswa->email }}</td>
                                </tr>
                                <tr>
                                    <th>Prodi</th>
                                    <td>{{ $mahasiswa->prodi }}</td>
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