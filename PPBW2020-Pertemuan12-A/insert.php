<?php 
include 'config/config.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
mysqli_query($conn, "INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','')");
echo "<script>alert('Data Telah Berhasil Ditambahkan !!');location='admin.php';</script>";
?>