<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" sontent="ie=edge">
    <title> Edit Data</title>
    <style>
        h1{
            text-align: center;
        }
        input{
            margin-left : 50px
        }
        body{
            background-color: #fa7a09;
            font-weight : 500;
            font-size : 20px;
        }
        table tr td {
        padding: 10px 0 10px 15px;
        }

        table tr td input[type=text] {
        padding: 5px 10px;
        width: 150%;
        outline: none;
        }
        button{
            padding: 8x 10px;
            font-size : 16px;
        }
        form{
            padding:center;
            width: 550px;
            height: 50px;
            margin: auto;
            position: relative;
            text-align: auto;
        }
    </style>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="{{ url('bengkel_01/' . $Bengkel->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="patch">  
        <table>
      <tr>
        <td><label for="id">id</label></td>
        <td>:</td>
        <td><input type="text" name="id" value="{{ $Bengkel->id }}"></td>
      </tr>
      <tr>
        <td><label for="judul">judul</label></td>
        <td>:</td>
        <td><input type="text" name="judul" value="{{ $Bengkel->judul }}"></td>
      </tr>
      <tr>
        <td><label for="jenis">jenis</label></td>
        <td>:</td>
        <td><input type="text" name="jenis" value="{{ $Bengkel->jenis }}"></td>
      </tr>
        <td>
            <button type="submit">Simpan</button>
        </td>
        </tr>
        </table>
        
    </form>
</body>

<!--<form action="{{ url('bengkel_01/' . $Bengkel->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    Id: <input type="text" name="id" value="{{ $Bengkel->id }}"><br>
    judul: <input type="text" name="judul" value="{{ $Bengkel->judul }}"><br>
    jenis : <input type="text" name="jenis" value="{{ $Bengkel->jenis }}"><br>
    <button type="submit">Simpan</button>
</form>-->