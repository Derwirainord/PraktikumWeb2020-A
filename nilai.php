<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nilai Mahasiswa</title>
</head>
<body>
        <style type="text/css">
            .body{
                background-color: rgb(103, 133, 143);
                  }
            </style>
    <h2 align="center">Input Data dan Nilai Mahasiswa</h2>
    <form action="" method="post">
        <table style="margin-left:auto;margin-right:auto" class="body">
            <tr>
                <td><label for="nama">Nama </label></td>
                <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td><input type="number" name="nim" id="nim"></td>
            </tr>
            <td><label for="semester">Semester</label></td>
                <td><input type="number" name="semester" id="semester"></td>
            <tr>
                <td><label for="tugas">Nilai Tugas</label></td>
                <td><input type="number" name="tugas" id="tugas"></td>
            </tr>
            <tr>
                <td><label for="uts">Nilai UTS</label></td>
                <td><input type="number" name="uts" id="uts"></td>
            </tr>
            <tr>
                <td><label for="uas">Nilai UAS</label></td>
                <td><input type="number" name="uas" id="uas"></td>
            </tr>
            <tr>
                <td><button  type="submit" name="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    <br><hr>
    <?php 
    if(isset($_POST["submit"])){
        $jumlah = $_POST["tugas"] + $_POST["uts"] + $_POST["uas"];
        $rata_rata = $_POST["tugas"]*0.4 + $_POST["uts"]*0.3 + $_POST["uas"]*0.3;
        if ($rata_rata>=80) {
            $hasil = "A";
        }elseif ($rata_rata>=70) {
            $hasil = "B";
        }elseif($rata_rata>=60) {
            $hasil = "C";
        }elseif ($rata_rata>=50) {
            $hasil = "D";
        }else {
            $hasil = "E";
        }
    }
    if(isset($rata_rata)){ ?>   
        <h2 align ="center">Nilai Mahasiswa</h2>
        <table  style="margin-left:auto;margin-right:auto" class="body" border = "0" cellpadding="10" >
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $_POST["nama"]; ?></td>
            </tr>
            <tr>
                <td>Nim</td>
                <td>:</td>
                <td><?= $_POST["nim"]; ?></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td><?= $_POST["semester"]; ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas</td>
                <td>:</td>
                <td><?= $_POST["tugas"]; ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>:</td>
                <td><?= $_POST["uts"]; ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>:</td>
                <td><?= $_POST["uas"]; ?></td>
            </tr>
            <td>Jumlah Nilai</td>
                <td>:</td>
                <td><?= $jumlah; ?></td>
            <tr>
                <td>Rata-rata</td>
                <td>:</td>
                <td><?= $rata_rata; ?></td>
            </tr>
            <tr>
                <td>Grade</td>
                <td>:</td>
                <td><?= $hasil; ?></td>
            </tr>
            <tr>
                <td><a href=""><button>Reset</button></a></td>
            </tr>
        </table>
    <?php } 
    ?>
</body>
</html>