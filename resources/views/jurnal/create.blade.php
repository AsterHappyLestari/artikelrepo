@extends('master')
@section('content')
@section('breadcrumb')
    {{ Breadcrumbs::render('jurnal.create') }}
@endsection
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

			<form action="{{ route('jurnal.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
                <div class="card-body">
                    <div class="basic-form"> 
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Nama Penulis</h5>
							<div class="form-group">
								<input type="text" name="nama_penulis" class="form-control input-default ">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Kategori</h5>
							<div class="basic-form">
								<div class="form-group">
									<select class="form-control default-select" name="kategori_id" id="sel1">
										<!-- <option>-- Pilih Kategori --</option>
										<option>Nasional</option>
										<option>Seminar Nasional</option>
										<option>Internasional</option> -->
										<option disabled value>Pilih Kategori</option>
										@foreach ($kat as $item)
											<option value="{{ $item->id_kategori }}">{{ $item->kategori }}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Judul</h5>
							<div class="form-group">
								<input type="text" name="judul" class="form-control input-default ">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Abstrak</h5>
                            <div class="basic-form">
                                <form>
                                    <div class="form-group">
                                        <textarea class="form-control" name="abstrak" rows="4" id="comment"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Kata Kunci</h5>
							<div class="form-group">
								<input type="text" name="katakunci" class="form-control input-default ">
							</div>
						</div>

						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>File</h5>
							<div class="form-group">
								<div class="custom-file">
									<input type="file" name="dokumen" class="custom-file-input">
										<label class="custom-file-label">Choose file</label>		
								</div> 				
							</div>
						</div>
											
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Referensi</h5>
								<div class="form-group">
									<input type="text" name="referensi" class="form-control input-default ">
								</div>
                        </div>
										
						<div class="col-xs-12 col-sm-12 col-md-12">
							<h5>Tautan</h5>
							<div class="input-group mb-3  input-info">
								<div class="input-group-prepend">
									<span class="input-group-text">https://example.com</span>
								</div>
									<input type="text" class="form-control" name="tautan">
							</div>
						</div>
											
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
							<div class="form-group">
							<input type="submit" value="Upload" class="btn btn-primary">
							</div>
						</div>
					</div>
                </div>
			</form>                      
        </div>
	</div>
@endsection
