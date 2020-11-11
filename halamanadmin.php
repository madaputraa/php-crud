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
  <a class="btn btn-primary" href="login.php" role="button">LOGOUT</a>
  <a class="navbar-brand"></a>
  <form method="GET" class="form-inline">
    <input class="form-control mr-sm-2 cari" name="cari" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit" formaction="cariadmin.php" value="cari">Search</button>
  </form>
</div>
</nav>


<?php 
	session_start();
	if($_SESSION['level']==""){
		header("location:login.php?pesan=gagal");
	}
	?>
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
					<th>Action</th> 
				</tr>
			</thead>
			<tbody> 

				<?php 
				$page = (isset($_GET['page']))? (int) $_GET['page'] : 1;
    $limit = 5;
    $limitStart = ($page - 1) * $limit;
    $SqlQuery = mysqli_query($koneksi, "SELECT * FROM produk ORDER BY nama_produk ASC LIMIT ".$limitStart.",".$limit );
    $no = $limitStart + 1;
    while($row = mysqli_fetch_array($SqlQuery)){ 
					?> 

					<tr> 
						<td align="center"><?php echo $no; ?></td> 
						<td><?php echo $row['nama_produk']; ?></td> 
						<td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td> 
						<td>Rp <?php echo $row['harga_jual']; ?></td> 
						<td> <a class="btn btn-primary" href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> | <a class="btn btn-primary" href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a> </td> 
					</tr>

					<?php 
					$no++; 
				} 
				?>
				
			</tbody> 
</table>
  	<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">

      <?php
      if($page == 1){ 
      ?>        
        <li class="page-item disabled"><a class="page-link" tabindex="-1" aria-disabled="true" href="#">Previous</a></li>
      <?php
      }
      else{ 
        $LinkPrev = ($page > 1)? $page - 1 : 1;
      ?>
        <li class="page-item"><a class="page-link" href="halamanadmin.php?page=<?php echo $LinkPrev; ?>">Previous</a></li>
      <?php
        }
      ?>

      <?php
      $SqlQuery = mysqli_query($koneksi, "SELECT * FROM produk");        
      $JumlahData = mysqli_num_rows($SqlQuery);
      $jumlahPage = ceil($JumlahData / $limit); 
      $jumlahNumber = 1; 
      $startNumber = ($page > $jumlahNumber)? $page - $jumlahNumber : 1; 
      $endNumber = ($page < ($jumlahPage - $jumlahNumber))? $page + $jumlahNumber : $jumlahPage; 
      for($i = $startNumber; $i <= $endNumber; $i++){
        $linkActive = ($page == $i)? ' class="page-item active" ' : '';
      ?>
        <li <?php echo $linkActive; ?>><a class="page-link" href="halamanadmin.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
      <?php
        }
      ?>
      
      <?php       
      if($page == $jumlahPage){ 
      ?>
        <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
      <?php
      }
      else{
        $linkNext = ($page < $jumlahPage)? $page + 1 : $jumlahPage;
      ?>
        <li class="page-item"><a class="page-link" href="halamanadmin.php?page=<?php echo $linkNext; ?>">Next</a></li>
      <?php
      }
      ?>

    </ul>
</nav>
</body> 
</html>