@extends('layout')
@section('title','Sistem Bengkel')
@section('body')
<br></br>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Tambah Item</h1>

    </div>
</div>


<form action="{{ route('bengkel.store') }}" method="post" enctype="multipart/form-data">
	@csrf
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Judul <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="judul" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Jenis <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="jenis" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br>
	<br><button type="submit">Unggah</button></br>
</form>
@endsection