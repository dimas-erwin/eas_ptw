<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data pembelian</title>
    <style>
       
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #F8EA8C;
        }
        th, td {
        text-align: left;
        font-size: 20px;
        padding: 2px;
        }
        tr:nth-child(even){background-color: #f2f2f2;}
        .tambah{
        display: inline-block;
        margin-top: 1px;
        margin-bottom: 1px;
        border: 1px solid #000;
        background-color: #E7F2F8;  
        padding: 5px 5px;
        font-size: 18px;
        text-decoration: none;
        
        }
        button{
            background-color: #E7F2F8;
            padding: 3px;
        }
        form{
            display: inline;
        }
        
    </style>
</head>
<body>
    <h2>Data bengkel</h2>
    <div style="overflow-x:auto;">
    <table>
        <thead>
            <tr>
                <th>no</th>
                <th>nama barang</th>
                <th>tanggal</th>
                <th>total</th>
                <th>Aksi</th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($PembeliBengkel as $pbkl)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pbkl->nama_barang }}</td>
                <td>{{ $pbkl->tanggal }}</td>
                <td>{{$pbkl ->total}}</td>
                <td>
                    <a class="tambah" href="{{ url('pembelian/'. $pbkl->id .'/edit') }}">Edit</a>
                    <form action="{{url('pembelian/' . $pbkl->id) }}" method="post">
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
    <a class = "tambah" href="{{route('pembelian.create')}}">Tambah</a>
    <button type="submit">Lihat Data Pembelian</button>
    </div>
</body>