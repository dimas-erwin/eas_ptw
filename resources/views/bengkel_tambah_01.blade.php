<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" sontent="ie=edge">
    <title> Tambah Data</title>
    <style>
        h2{
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
    <h2>Tambah Data</h2>
    <form action="{{ route('bengkel_01.store') }}" method="post">
        @csrf
         <table>
      <tr>
        <td><label for="id">id</label></td>
        <td>:</td>
        <td><input type="text" name="id"></td>
      </tr>
      <tr>
        <td><label for="judul">judul</label></td>
        <td>:</td>
        <td><input type="text" name="judul"></td>
      </tr>
      <tr>
        <td><label for="jenis">jenis</label></td>
        <td>:</td>
        <td><input type="text" name="jenis"></td>
      </tr>
        <td>
            <button type="submit">Simpan</button>
        </td>
        </tr>
        </table>
    </form>
</body>


<!--<form action="{{ route('bengkel_01.store') }}" method="post">
    @csrf
    ID: <input type="text" name="id"><br>
    judul: <input type="text" name="judul"><br>
    jenis: <input type="text" name="jenis"><br>
    <button type="submit">Simpan</button>
</form>-->