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
            background-color: #EBF5F7;
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
    <form action="{{ route('pembelian.store') }}" method="post">
        @csrf
         <table>
      <!-- <tr>
        <td><label for="id">id</label></td>
        <td>:</td>
        <td><input type="text" name="id"></td>
      </tr> -->
      <tr>
        <td><label for="nama_barang">nama barang</label></td>
        <td>:</td>
        <td><input type="text" name="nama_barang"></td>
      </tr>
      <!-- <tr>
        <td><label for="tanggal">tanggal</label></td>
        <td>:</td>
        <td><input type="date" name="tanggal"></td>
      </tr> -->
      <tr>
        <td><label for="total">total</label></td>
        <td>:</td>
        <td><input type="text" name="total"></td>
    
      <tr>
        <td>
            <button type="submit">Simpan</button>
        </td>
        </tr>
        </table>
    </form>
</body>
