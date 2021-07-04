@extends('layout')
@section('title','Sistem Bengkel')
@section('body')
<br></br>
<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Edit Item</h1>

    </div>
</div>


<form action="{{ url('pembelian/' . $pembelian->id) }}" method="post" enctype="multipart/form-data">
	@csrf
        <input type="hidden" name="_method" value="patch">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Id <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="id" required="required" value="{{ $pembelian->id }}" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Nama Barang <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="nama_barang" required="required" value="{{ $pembelian->nama_barang }}" class="form-control col-md-7 col-xs-12">
		</div>
</br><br>
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Total <span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12">
		<input type="text" name="total" required="required" value="{{ $pembelian->total }}" class="form-control col-md-7 col-xs-12">
		</div>
</br>
	<br><button type="submit">OK</button></br>
</form>
@endsection