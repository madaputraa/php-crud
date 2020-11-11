<?php 
include('koneksi.php');  
?> 
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="abc.css">

</head>
<body>
	<div class="container">
	<br>
	<center>
		<h2>Tambah Produk</h2>
	</center>
	<br>
	 
	<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
	<section class="base"> 
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" autofocus="" required="" />
    </div>

    <div class="form-group">
        <label>Harga Beli</label>
        <input type="text" class="form-control" name="harga_beli" required="" />
    </div>

    <div class="form-group">
        <label>Harga Jual</label>
        <input type="text" class="form-control" name="harga_jual" required="" />
    </div>
    <br>
    <div>
    	 <button class="btn btn-primary btn-block" type="submit">Simpan Produk</button>
    </div>
	</section> 
	</form>
	</div>
</body>
</html>