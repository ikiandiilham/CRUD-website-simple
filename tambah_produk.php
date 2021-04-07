<?php include('koneksi.php'); ?>
<!DOCTYPE html>
<html lang=en>
    <head>
        <title>Crud Arkademy</title>
        <style type="text/css">
        * {
            font-family: "Trebuchet MS";
            
        }
        h1{
            text-transform: uppercase;
            color: salmon;
        }
        .base {
            width: 400px;
            padding: 20px;
            margin-left: auto;
            margin-right: auto;
            background-color: #ededed;
        }
        label {
            margin-top: 10px;
            float: left;
            text-align: left;
            width: 100%;
        }
        input{
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: #f8f8f8;
            outline-color: salmon;
            border: 2px solid #ccc;
        }
        button {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
        </style>
        <meta charset=UTF-8>
        <meta name=viewport content=width=device-width, initial-scale=1.0″>
        <meta http-equiv=X-UA-Compatible content=ie=edge”>
    </head>
    <body>
        <center><h1>Tambah Produk</h1></center>
        <form method="POST" action="proses_tambah.php" enctype="multipart/form-data">

        <section class="base">
            <div>
                <label>Nama Produk</label>
                <input type="text" name="nama_produk" />
            </div><div>
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" />
            </div>
            <div>
                <label>Harga Jual</label>
                <input type="text" name="harga_jual" required="" />
            </div>
            <div>
                <label>Jumlah</label>
                <input type="text" name="jumlah" required="" />
            </div>
            <div>
                <label>Gambar Produk</label>
                <input type="file" name="gambar_produk" required="" />
            </div>
            <div>
                <button type="submit">Simpan Produk</button>
            </div>
        </form>
        </section>
    </body>
</html>