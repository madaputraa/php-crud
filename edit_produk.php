<?php 
include 'koneksi.php'; 
if (isset($_GET['id'])) { 
$id = ($_GET["id"]); 
$query = "SELECT * FROM produk WHERE id='$id'";
$result = mysqli_query($koneksi, $query); 
if(!$result){ 
	die ("Query Error: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi)); 
} 
$data = mysqli_fetch_assoc($result); 
if (!count($data)) { echo "<script>alert('Data tidak ditemukan pada database');window.location='halamanadmin.php';</script>"; 
} 
} else {
	echo "<script>alert('Masukkan data id.');window.location='halamanadmin.php';</script>"; 
} 
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
		<h2>Edit Produk <?php echo $data['nama_produk']; ?></h2>
	</center>
	<br>
	 
	<form method="POST" action="proses_tambah.php" enctype="multipart/form-data">
	<section class="base">
	<input name="id" value="<?php echo $data['id']; ?>" hidden />  
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk']; ?>" autofocus="" required="" />
    </div>

    <div class="form-group">
        <label>Harga Beli</label>
        <input type="text" class="form-control" name="harga_beli" value="<?php echo $data['harga_beli']; ?>" required="" />
    </div>

    <div class="form-group">
        <label>Harga Jual</label>
        <input type="text" class="form-control" name="harga_jual" value="<?php echo $data['harga_jual']; ?>" required="" />
    </div>
    <br>
    <div>
    	 <button class="btn btn-primary btn-block" type="submit">Simpan Perubahan</button>
    </div>
	</section> 
	</form>
	</div>
</body>
</html>