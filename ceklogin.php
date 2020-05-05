<?php 
session_start();
 
include 'konek.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$data = mysqli_query($db,"select * from petugas where username='$username' and password='$password'");
 
$cek = mysqli_num_rows($data);
// SINGLE LOGIN
/*
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['level'] = "Kepala";
	header("location:kepala.php");
}else{
	header("location:login.php?pesan=gagal");
}*/

// LOGIN MUTLTI LEVEL

if ($cek > 0 ) {
	$dt = mysqli_fetch_assoc($data);

	if ($dt['level']=="Marketing") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Marketing";
		header("location:marketing.php");
	}elseif ($dt['level']=="Admin") {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "Admin";
		header("location:admin.php");
	}else{
		header("location:index.php?pesan=login-gagal");
	}
}else {
	header("location:index.php?pesan=terjadi-kesalahan");
}
?>