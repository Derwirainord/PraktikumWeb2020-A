<!doctype html>
<html lang="en">
  <head>
    <title>PEGAWAI</title>
    <?php
    include 'config/config.php';
    ?>
  </head>
  <body>
  <style type="text/css">
  .jumbotron {
    max-width: 80%;
    margin:30px auto;}
  table {
    background-color:LightCoral;
    color:white;
    max-width: 98%;
    margin: 50px auto;
    margin-top: 25px;}
  thead {
    background-color: brown;}
  th {
    background-color: brown;
    color: black;}
  .btn a{
    color: white;}
  h2 {
    padding-top: 40px;
	  font-weight: 1000;
    text-align: center;}
  .btn-secondary {
    margin-left: 12px;
    margin-bottom: -5px;}
  .btn-outline-secondary{
    color:white;}
  .btn-dark {
    margin-top: 5px;
    margin-left: 10px;}
  .btn-outline-secondary{
    color:white;}
  h3 {
	  font-weight: 1000;
    margin-left: 12px;}
  h1 {
	text-align: center;
	color: SaddleBrown;
	font-weight: 1000;}
</style>
    <h1>HARTA TAHTA MAHASISWA</h1>
    <div class="jumbotron" style="background-color:AntiqueWhite;">
      <h3>Selamat Datang&#127752;</h3>
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#added">Tambah Data</button>
      <table class="table">
        <thead>
          <tr>
              <th scope="col">No</th>
              <th scope="col">NIM</th>
              <th scope="col">Nama</th>
              <th scope="col">Alamat</th>
              <th scope="col">Opsi</th>
          </tr>
        </thead>
        <?php
          $no = 1;
          $data = mysqli_query($conn,"select * from mahasiswa");
          while ($d = mysqli_fetch_array($data)){
          ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $d['nim']; ?></td>
              <td><?php echo $d['nama']; ?></td>
              <td><?php echo $d['alamat']; ?></td>
              <td>
                <button type="button" class="btn btn-outline-secondary">
                  <a href="edit_pegawai.php?id=<?php echo $d['id'];?>">Edit</a>
                </button>
                <button class="btn btn-outline-dark" type="button" onclick="alert('Anda Tidak Bisa Menghapus Data !!')" value="  Hapus  ">Hapus</button> 
              </td>
            </tr>
          <?php
          }
        ?>
      </table>
      <button type="button" class="btn btn-dark"><a href="logout.php">Logout</a></button>
    </div>
    <div class="modal fade" id="added" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document"><div class="modal-content"><div class="modal-header">
    <h5 class="modal-title" id="editmodalTitle">Masukkan Data Mahasiswa</h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>
      <div class="modal-body">
            <?php
              include 'insert_pegawai.php';
            ?>
        </div></div>
      </div></div>
  </body>
</html>