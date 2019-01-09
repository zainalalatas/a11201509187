<?php 
	session_start();
	if(EMPTY($_SESSION['Login'])){
		echo "<script>alert('Username dan Password salah');</script>";
		echo "<script>document.location='index.php';</script>";
		//header('location:index.php');
	}
	include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

span {
    float: left;
}

span a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

span a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #B22222;
}
</style>
</head>
<body>

<!--<ul>
  <li style="float:right"><a class="active" href="logout.php">Logout</a></li>
</ul>-->
<br><br><br>

<h1> <?php //echo $_SESSION['Login']; ?></h1>
<center style="background-color:green; padding:2em; margin-top:-6em;">
<h4 >credit to</h4>
<h1 style="margin-bottom:20px"> NURHADI ALDO</h1>
</center>
<br>

<?php $id= $_SESSION['Login']; 


include "config/koneksi.php";
$query = mysqli_query($kon,"SELECT * FROM registrasi WHERE id='$id'");
$data = mysqli_fetch_array($query);

$data['tanggal_lahir'] = date('d F Y');
?>
<center><h3>Biodata </h3></center>
<div class="container">
<table class="table table-bordered table-stripped">
<tr>
<td>Nama</td>
<td><?php echo $data['nama']; ?></td>
</tr>
<tr>
<td>Tempat Lahir</td>
<td><?php echo $data['tempat_lahir']; ?></td>
</tr>
<tr>
<td>tanggal Lahir</td>
<td><?php echo $data['tanggal_lahir']; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?php echo $data['jk']; ?></td>
</tr>
<tr>
<td>Alamat</td>
<td><?php echo $data['alamat']; ?></td>
</tr>
<tr>
<td>Telepon</td>
<td><?php echo $data['telp']; ?></td>
</tr>
<tr>
<td>Username</td>
<td><?php echo $data['email']; ?></td>
</tr>
<tr>
<td>Password</td>
<td><?php echo $data['password']; ?></td>
</tr>
</table>
<span style="float:right"><a class="active" href="logout.php">Logout</a> </span>
</div>
</body>
</html>
