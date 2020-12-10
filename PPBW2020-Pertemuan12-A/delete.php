<?php
include 'config/config.php';
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM mahasiswa WHERE id='$id'");
echo "<script>alert('Data Telah Berhasil Dihapus!');location='admin.php';</script>";
?>