<?php 
include('koneksi.php'); 
?> 
<!DOCTYPE html> 
<html> 
<head> <title>CRUD CRUD Penjualan </title> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


</head> 
<body>
<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <a class="btn btn-primary" href="halamanuser.php" role="button">Kembali</a>
  <a class="navbar-brand"></a>
  <form method="GET" class="form-inline">
    <input class="form-control mr-sm-2 cari" name="cari" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit" formaction="cariuser.php" value="cari">Search</button>
  </form>
</div>
</nav>

	<br>
	<center>
		<h1>Data Produk</h1>
		<center> 
			<center>
				<a class="btn btn-primary" href="tambah_produk.php" role="button">Tambah Produk</a>
				<center> 
		<br/> 
		<table class="table table-bordered w-75 p-3" > 
			<thead class="thead-light"> 
				<tr align="center"> 
					<th>No</th> 
					<th>Produk</th>  
					<th>Harga Beli</th> 
					<th>Harga Jual</th> 
				</tr>
			</thead>
			<tbody> 

				<?php 
        if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk LIKE '%$cari%' ORDER BY nama_produk ASC");
        }else{
        $SqlQuery = mysqli_query($koneksi, "SELECT * FROM produk WHERE nama_produk ");
        }
        $no = 1;
        while($row = mysqli_fetch_array($SqlQuery)){ 
				?> 

					<tr> 
						<td align="center"><?php echo $no; ?></td> 
						<td><?php echo $row['nama_produk']; ?></td> 
						<td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td> 
						<td>Rp <?php echo $row['harga_jual']; ?></td> 
					</tr>

				<?php 
				$no++; 
				} 
				?>
				
			</tbody> 
</table>
</body> 
</html>