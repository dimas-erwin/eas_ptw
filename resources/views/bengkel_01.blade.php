<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Bengkel</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #94d0cc;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    <a class="tambah" href="{{ route('bengkel_01.create') }}">Tambah</a>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>judul</th>
                <th>jenis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($Bengkel as $bk)
            <tr>
                <td>{{ $bk->id }}</td>
                <td>{{ $bk->judul }}</td>
                <td>{{ $bk->jenis }}</td>
                <td>
                    <a class="tambah" href="{{ url('bengkel_01/' . $bk->id . '/edit') }}">Edit</a>
                    |
                    <form action="{{ url('bengkel_01/' . $bk->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>