<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="abc.css">

</head>
<body style="background: linear-gradient(to right, #c9d6ff, #e2e2e2);">

    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
        }
    }
    ?>

	<div class="container">
    <section class="base" style="margin: 80px auto;padding: 30px 20px; background: white; 
"> 
	<center>
		<h3>SILAHKAN LOGIN</h3>
	</center>
    <br>
	<form method="POST" action="loginproses.php" enctype="multipart/form-data">
    <div class="form-group">
        <label>Username</label>
        <input type="text" class="form-control" name="username" autofocus="" required="required" />
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" required="required" />
    </div>
    <br>
    <div>
    	 <button class="btn btn-primary btn-block" value="LOGIN" type="submit">LOGIN</button>
    </div>
	</section> 
	</form>
	</div>
</body>
</html>