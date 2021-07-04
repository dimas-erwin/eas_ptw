@extends('layout')
@section('title','Sistem Bengkel')
@section('body')

<div class="row">
    <div class="col-md-12">
        <h1 class="page-head-line" >Data Pembelian</h1>

    </div>
</div>
<div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                            <a class="tambah" href="{{ route('pembelian.create') }}">Tambah</a>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Tanggal</th>
                                            <th>Total</th>
                                            <th>Aksi</th>
                                            
                                            
                                        </tr>
                                    </thead>                                   

                                    <tbody>
                                    <?php $no=1; ?>
                                    @foreach ($PembeliBengkel as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->nama_barang }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->total }}</td>
                                        <td>
                                            <a class="tambah" href="{{ url('pembelian/'. $p->id .'/edit') }}">Edit</a>
                                            <form action="{{url('pembelian/' . $p->id) }}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                |
                                                <button type="submit">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                        
                                        
                                        
                                        
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
        @yield('tambah_barang')
                

@endsection