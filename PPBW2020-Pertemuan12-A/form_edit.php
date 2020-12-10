<!doctype html>
<html lang="en">
  <head>
    <title>Edit Data</title>
    <style>
      .jumbotron {
        background-color: LightCoral;
        width: 50%;
        margin: 20px auto;
      }
      .btn a{
        color: white;
      }
     
      h2 {
        padding-top: 40px;
        text-align: center;
      }

      table {
        margin: 25px auto;
      }

      .btn {
        margin-top: 10px;
      }

      .btn-success {
        margin-top: -100px;
        margin-bottom: 10px
      }
      .btn-secondary {
        margin-bottom: 10px
        margin-top: -5px;
        margin-left: 225px;
      }

      label {
        margin-right: 25px;
      }
      input {
        width: 450px;
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <h2>Edit Data Mahasiswa</h2>
    <div class="jumbotron">
      <?php
      include 'config/config.php';
      $id = $_GET['id'];
      $data = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE id='$id'");
      while ($d = mysqli_fetch_array($data)){
      ?>
      <form method="post" action="edit.php">
        <table>
            <tr>
                <td><label>NIM</label></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nim" value="<?php echo $d['nim']; ?>">
                </td>
            </tr>
            <tr>
                <td><label>Nama</label></td>
                <td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
            </tr>
            <tr><td><label>Alamat</label></td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
        </table>
        <button type="submit" class="btn-secondary"><a href="admin.php">Kembali</a></button>
        <button type="submit" class="btn-success">Simpan</button>
      </form>
      <?php } ?>  
    </div>
  </body>
</html>