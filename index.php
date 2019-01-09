<?php
	session_start();
	include "config/koneksi.php";
	
	if(!empty($_POST)){
		//extract($_POST);
		// exit();
		$xemail = $_POST['xemail'];
		$xpassword = md5($_POST['xpassword']);
		$query = mysqli_query($kon,"SELECT * FROM registrasi WHERE email='$xemail' AND password='$xpassword'");
			    
		if(mysqli_num_rows($query)>0){
			//echo "1";
			
			$data = mysqli_fetch_array($query);
			
			$_SESSION['Login']= $data['id'] ;
			 header('location:home.php');
		}else{
			echo "<script>alert('Username dan Password salah');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
	  <h1 style="text-align: center;margin-top: 70px"></h1>
	  <img src="aset/img/appll.png" class="img-responsive" style="width: 150px;height: 150px;margin-left: auto;margin-right:auto;">
	  
	<div class="container" style="margin-top: 10px;">
		<form method="post" action="" style="margin-left: 400px;margin-right: 400px;">
		  <div class="form-group">
			<label for="username"style="color:white">Username</label>
			<input type="text" class="form-control" name="xemail" required>
		  </div>
		  <div class="form-group">
			<label for="pass"style="color:white">Password</label>
			<input type="password" class="form-control" name="xpassword" required>
		  </div>
		  <button type="submit" class="btn btn-info" style="float: right;">Login</button>
		  <p style="color:white">daftar <a href="registrasi.php">disini</a></p>
		  
		</form>
	</div>
		  <div class="copyright" style="margin-top: 120px;">
			<div class="container">
			  
			</div>
		  </div>
		<script src="jquery-1.11.2.min.js"></script>
		<script src="aset/js/bootstrap.min.js"></script>
	</body>
</html>
