<?php 
include 'koneksi.php'; 

$nama_produk = $_POST['nama_produk']; 
$harga_beli = $_POST['harga_beli']; 
$harga_jual = $_POST['harga_jual']; 
$query = "INSERT INTO produk (nama_produk, harga_beli, harga_jual) VALUES ('$nama_produk', '$harga_beli', '$harga_jual')"; 
$result = mysqli_query($koneksi, $query); 
if(!$result){ 
die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi)); 
} else { 
	echo "<script>alert('Data berhasil ditambah.');window.location='halamanadmin.php';</script>"; 
} 
?>