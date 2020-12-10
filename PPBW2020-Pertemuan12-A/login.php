<?php 
session_start();
include 'config/config.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data['role']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		header("location:admin.php");
	}else if($data['role']=="pegawai"){
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "pegawai";
		header("location:pegawai.php");
	}else{
		header("location:index.php?message=failed");
	}	
}else{
	header("location:index.php?message=failed");
}
?>