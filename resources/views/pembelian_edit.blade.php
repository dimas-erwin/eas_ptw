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
            background-color: #D4F1F4;
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
    <form action="{{ url('pembelian/' . $pembelian->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="patch">  
        <table>
      <!-- <tr>
        <td><label for="id">id</label></td>
        <td>:</td>
        <td><input type="text" name="id" value="{{ $pembelian->id }}"></td>
      </tr> -->
      <tr>
        <td><label for="nama_barang">nama barang</label></td>
        <td>:</td>
        <td><input type="text" name="nama_barang" value="{{ $pembelian->nama_barang }}"></td>
      </tr>
      <!-- <tr>
        <td><label for="tanggal">tanggal</label></td>
        <td>:</td>
        <td><input type="date" name="tanggal" value="{{ $pembelian->tanggal }}"></td>
      </tr> -->
      <tr>
        <td><label for="total">total</label></td>
        <td>:</td>
        <td><input type="text" name="total" value="{{ $pembelian->total }}"><br></td>
    
      <tr>
        <td>
            <button type="submit">Simpan</button>
        </td>
        </tr>
        </table>
        
    </form>
</body>

