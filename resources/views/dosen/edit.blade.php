@extends('master')
@section('content')
@section('breadcrumb')
    {{ Breadcrumbs::render('dosen.edit/{id_dosen}') }}
@endsection
<div class="col-12">
    <div class="card">
        <div class="card-header">
			<div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <h4 class="card-title">Input Data Dosen</h4>
			</div>
        </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Maaf</strong> Data yang anda inputkan bermasalah.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('dosen.update',$dosen->id_dosen) }}" method="POST">
	@csrf
	@method('PUT')
        <div class="card-body">
            <div class="basic-form">
                                	              
				<div class="col-xs-12 col-sm-12 col-md-12">
					<h5>NIP</h5>
						<div class="form-group">
							<input type="text" name="nip" class="form-control input-default " value="{{ $dosen->nip }}">
						</div>
				</div>

                <div class="col-xs-12 col-sm-12 col-md-12">
					<h5>Nama</h5>
						<div class="form-group">
							<input type="text"  name="nama_dosen" class="form-control input-default " value="{{ $dosen->nama_dosen }}">
						</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-12">
					<h5>Jenis Kelamin</h5>
						<div class="basic-form">
							<div class="form-group">
							<select class="form-control default-select" name="jenisk"  id="jenisk" value="{{ $dosen->jenisk }}">
											<option>-- Pilih Jenis Kelamin --</option>
											<option value="Laki-laki" @if($dosen->jenisk == 'Laki-laki') selected @endif>Laki-laki</option>
											<option value="Perempuan" @if($dosen->jenisk == 'Perempuan') selected @endif>Perempuan</option>
							</select>
							</div>
						</div>		
				</div>

                <div class="col-xs-12 col-sm-12 col-md-12">
					<h5>No Telepon</h5>
						<div class="form-group">
							<input type="text"  name="notelp_dosen" class="form-control input-default " value="{{ $dosen->notelp_dosen }}">
						</div>
				</div>

                <div class="col-xs-12 col-sm-12 col-md-12">
					<h5>Alamat</h5>
                        <div class="basic-form">
                            <form>
                                <div class="form-group">
                                    <textarea class="form-control"  name="alamat_dosen" rows="4" id="comment" >{{ $dosen->alamat_dosen }}</textarea>
                                </div>
                            </form>
                        </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
					<h5>Email</h5>
						<div class="form-group">
							<input type="text"  name="email" class="form-control input-default " value="{{ $dosen->email }}">
						</div>
				</div>
											
				<div class="col-xs-12 col-sm-12 col-md-12">
                    <h5>Password</h5>
                        <div class="form-group">
                            <input type="password"  name="password" class="form-control" placeholder="Password">
                        </div>
                </div>

				<div class="col-xs-12 col-sm-12 col-md-12 text-left">
                	<button type="submit" class="btn btn-primary">Edit</button>
        		</div>
										
			</div>
		</div>
    </div>
</form>
</div>

@endsection