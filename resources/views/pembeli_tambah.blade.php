@extends('layout')
@section('body')
<br></br>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Tambah Item</h1>

    </div>
</div>


<form action="{{ route('pembelian.store') }}" method="post" enctype="multipart/form-data">
	@csrf
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nama Barang <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Total <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="total" required="required" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Tanggal <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="date" name="tanggal" required="required" class="form-control col-md-7 col-xs-12">
		</div>
	<br><button type="submit">Unggah</button></br>
</form>
@endsection