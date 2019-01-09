<?php
	include "config/koneksi.php";
	
	if(!empty($_POST)){
		extract($_POST);
		$xpassword = md5($_POST['xpassword']);
		$query = mysqli_query($kon,"INSERT INTO `registrasi`(`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `telp`, `email`, `password`) VALUES ('NULL','$xnama','$xtempat','$tgllhr','$jk','$alamat','$xtelp','$xemail','$xpassword')");
		
		if($query){
			echo "1";
			header('location:index.php');
		}else{
			echo "2";
		}
		
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">

<title>Registrasi</title>
<!---<link rel="stylesheet" type="text/css"  href="css/styleform.css">-->
<style>
table tr{
	height: 55px !important;
}
table tr td{
	min-width: 100px !important;
}
</style>
</head>

<body>   
<div class="container">
<form action="" method="post" name="form1">
<table>
<div style="margin-top:20px; margin-left:220px; margin-right:220px; padding:1px; background-color:white;">
		<div style="margin:20px; padding: 1px; background-color:grey;">
			<h3 style="text-align:center">Registrasi</h3>
		</div>
		<div class="row">
		<div class="col-md-12">
		<div class="col-md-12">
		<div class="col-md-12">
			<div class="form-group">
				<label for="">Nama</label>
				<input class="form-control" type="text" name="xnama" size="50" maxlength="40"  />
			</div>
			<div class="form-group">
				<label for="">Tempat Lahir</label>
				<input class="form-control" type="text" name="xtempat" size="40" maxlength="40"/>
			</div>
			<div>
				<label for="">Tgl Lahir</label>
				<input class="form-control" type="date" name="tgllhr"/>
			</div>
			<br>
			<div>
						<label for="">Jenis Kelamin</label>
						<select name="jk" class="form-control">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
						</select>
			</div>
			<br>
			<div>
				<label for="">Alamat</label>
				<textarea rows="3" class="form-control" name="alamat"></textarea> 
			</div>
			<br>
			<div>
				<label for="">Telepon</label>
				<input class="form-control" type="text" name="xtelp" size="20" maxlength="20"/>
			</div>
			<br>
			<div>
				<label for="">Username</label>
				<input class="form-control" type="text" name="xemail" size="40" maxlength="30" >
			</div>
			<br>
			<div>
				<label for="">Password</label>
				<input class="form-control" type="password" name="xpassword" size="40" maxlength="30"  />
			</div>
			<br>
			<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<a href="home.php"><button class="btn btn-warning">Kembali</button></a>
</div>
</div>
</div>
</div>
</div>
</tr>
</div>
</table>
</form>
</div>
		<script src="jquery-1.11.2.min.js"></script>
		<script src="aset/js/bootstrap.min.js"></script>
</body>
</html>
