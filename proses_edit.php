<?php 
// memanggil file koneksi.php untuk melakukan koneksi database 
include 'koneksi.php'; 
// membuat variabel untuk menampung data dari form 
$id = $_POST['id']; 
$nama_produk = $_POST['nama_produk']; 
$harga_beli = $_POST['harga_beli']; 
$harga_jual = $_POST['harga_jual']; 

$query = "UPDATE produk SET nama_produk = '$nama_produk', harga_beli = '$harga_beli', harga_jual = '$harga_jual'"; 
$query .= "WHERE id = '$id'";
$result = mysqli_query($koneksi, $query); 
// periska query apakah ada error 
if(!$result){ die ("Query gagal dijalankan: ".mysqli_errno($koneksi). " - ".mysqli_error($koneksi)); 
} else { 
//tampil alert dan akan redirect ke halaman index.php 
//silahkan ganti index.php sesuai halaman yang akan dituju 
echo "<script>alert('Data berhasil diubah.');window.location='halamanadmin.php';</script>"; 
} 
?>