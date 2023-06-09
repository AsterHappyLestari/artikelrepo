@extends('master')
@section('breadcrumb')
    {{ Breadcrumbs::render('mahasiswa.edit/{id_mhs}') }}
@endsection
@section('content')

	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<div class="col-xs-12 col-sm-12 col-md-12 text-left">
					<h4 class="card-title">Input Data Mahasiswa</h4>
				</div>
			</div>
			<form action="{{ route('mahasiswa.update',$mhs->id_mhs) }}" method="POST">
				@csrf 
				@method('PUT')
					<div class="card-body">
						<div class="basic-form">                  
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>NIM</h5>
								<div class="form-group">
									<input type="text" name="nim" class="form-control input-default" value="{{ $mhs->nim }}">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Nama</h5>
								<div class="form-group">
									<input type="text" name="nama_mhs" class="form-control input-default" value="{{ $mhs->nama_mhs }}">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Jenis Kelamin</h5>
								<div class="basic-form">
									<div class="form-group">
										<select class="form-control default-select" name="jenisk"  id="jenisk" value="{{ $mhs->jenisk }}">
											<option>-- Pilih Jenis Kelamin --</option>
											<option value="Laki-laki" @if($mhs->jenisk == 'Laki-laki') selected @endif>Laki-laki</option>
											<option value="Perempuan" @if($mhs->jenisk == 'Perempuan') selected @endif>Perempuan</option>
										</select>
									</div>
								</div>		
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>No Telepon</h5>
								<div class="form-group">
									<input type="text" name="notelp_mhs" class="form-control input-default" value="{{ $mhs->notelp_mhs }}">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Alamat</h5>
								<div class="basic-form">
									<form>
										<div class="form-group">
											<textarea class="form-control" name="alamat_mhs" rows="4" id="comment">{{ $mhs->alamat_mhs }}</textarea>
										</div>
									</form>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Email</h5>
								<div class="form-group">
									<input type="text" name="email" class="form-control input-default" value="{{ $mhs->email }}">
								</div>
							</div>
													
							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Password</h5>
								<div class="form-group">
									<input type="password" name="password" class="form-control" placeholder="Password">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<h5>Program Studi</h5>
								<div class="basic-form">
									<div class="form-group">
									<select class="form-control default-select" name="prodi"  id="prodi" value="{{ $mhs->prodi }}">
										<option>-- Pilih Prodi --</option>
												<option value="D3 Manajemen Informatika" @if($mhs->prodi == 'D3 Manajemen Informatika') selected @endif>D3 Manajemen Informatika</option>
												<option value="D3 Teknik Komputer" @if($mhs->prodi == 'D3 Teknik Komputer') selected @endif>D3 Teknik Komputer</option>
												<option value="D4 Teknologi Rekayasa Perangkat Lunak" @if($mhs->prodi == 'D4 Teknologi Rekayasa Perangkat Lunak') selected @endif>D4 Teknologi Rekayasa Perangkat Lunak</option>
									</select>	
									</div>
								</div>		
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 text-left">
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-primary">
								</div>
							</div>
						</div>					
					</div>
			</form>	
		</div>
	</div>
	<!-- <script>
		document.getElementById('jenisk').value = "{{$mhs->jenisk}}"
	</script> -->
@endsection