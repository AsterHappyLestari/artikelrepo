@extends('master')
@section('breadcrumb')
    {{ Breadcrumbs::render('jurnal.edit/{id_jurnal}') }}
@endsection
@section('content')

	<div class="col-12">
        <div class="card">
            <div class="card-header">
				<div class="col-xs-12 col-sm-12 col-md-12 text-left">
                    <h4 class="card-title">Input Jurnal</h4>
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

			<form action="{{ route('jurnal.update',$jn->id_jurnal) }}" method="POST" enctype="multipart/form-data">
				@csrf
				@method('PUT')
                <div class="card-body">
                    <div class="basic-form"> 
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Nama Penulis</h5>
							<div class="form-group">
								<input type="text" name="nama_penulis" class="form-control input-default" value="{{ $jn->nama_penulis }}">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Kategori</h5>
							<div class="basic-form">
								<div class="form-group">
                                    <select class="form-control default-select" name="kategori_id"  id="kategori" value="{{ $jn->kategori }}">
										<option disabled value>Pilih Kategori</option>
										@foreach ($kat as $item)
											<option value="{{ $item->id_kategori }}" {{ old('kategori_id', $jn->kategori_id) == $item->id_kategori ? 'selected' : null }}>{{ $item->kategori }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Judul</h5>
							<div class="form-group">
								<input type="text" name="judul" class="form-control input-default" value="{{ $jn->judul }}">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Abstrak</h5>
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" name="abstrak" rows="4" id="comment">{{ $jn->abstrak }}</textarea>
                                    </div>
                                </form>
                            </div>
                        </div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Kata Kunci</h5>
							<div class="form-group">
								<input type="text" name="katakunci" class="form-control input-default" value="{{ $jn->katakunci }}">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>File</h5>
							<div class="form-group">
								<div class="custom-file">
									<input type="file" name="dokumen" class="custom-file-input">
										<label class="custom-file-label">{{$jn->dokumen}}</label>
								</div> 				
							</div>
						</div>
											
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Referensi</h5>
								<div class="form-group">
									<input type="text" name="referensi" class="form-control input-default" value="{{ $jn->referensi }}">
								</div>
                        </div>
										
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Tautan</h5>
							<div class="input-group mb-3  input-success">
								<div class="input-group-prepend">
									<span class="input-group-text">https://example.com</span>
								</div>
									<input type="text" class="form-control" name="tautan" value="{{ $jn->tautan }}">
							</div>
						</div>
											
						<div class="col-xs-12 col-sm-12 col-md-12 text-left">
							<div class="form-group">
								<input type="submit" value="Update" class="btn btn-primary">
							</div>
						</div>
					</div>
                </div>
			</form>                      
        </div>
	</div>
@endsection
