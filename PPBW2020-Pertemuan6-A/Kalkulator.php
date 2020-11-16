<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator</title>
        <!-- Code java script-->
        <!-- Dalam penulisan code java script harus berada di dalam tag script buka dan tutup-->
        <script type="text/javascript">
        function tambah(){
        var Bilangan1=parseFloat(document.Kalkulator.Bilangan1.value);
        var Bilangan2=parseFloat(document.Kalkulator.Bilangan2.value);
        var hasil= Bilangan1+Bilangan2;
        document.Kalkulator.hasil.value=hasil;
        }
        function kurang(){
        var Bilangan1=parseFloat(document.Kalkulator.Bilangan1.value); 
        var Bilangan2=parseFloat(document.Kalkulator.Bilangan2.value);
        var hasil= Bilangan1-Bilangan2;
        document.Kalkulator.hasil.value=hasil;
        }
        function kali(){
        var Bilangan1=parseFloat(document.Kalkulator.Bilangan1.value);
        var Bilangan2=parseFloat(document.Kalkulator.Bilangan2.value);
        var hasil= Bilangan1*Bilangan2;
        document.Kalkulator.hasil.value=hasil;
        }
        function bagi(){
        var Bilangan1=parseFloat(document.Kalkulator.Bilangan1.value);
        var Bilangan2=parseFloat(document.Kalkulator.Bilangan2.value);
        var hasil= Bilangan1/Bilangan2;
        document.Kalkulator.hasil.value=hasil;
        }
        </script>
        <!-- Pada fungsi tambah, variabel Bilangan1 di isi oleh nilai element form dengan name 
        Bilangan1 (var Bilangan1 = parseFloat(document.Kalkulator.Bilangan1.value);). 
        Begitu juga dengan variabel Bilangan2. Untuk variabel hasil nilainya di isi oleh 
        variabel Bilangan1 ditambah variabel Bilangan2. Terakhir adalah mengembalikan nilai 
        ke elemen form bernama hasil (document.Kalkulator.hasil.value=hasil;).
        Untuk kurang, kali dan bagi cara nya hampir sama, yang membedakan adalah operator -->

 <!-- form untuk tabel -->
 <!-- Kode ini digunakan untuk membuat form yang terdiri dari 3 input dan 4 tombol,untuk menyusun elemen form kita gunakan tabel-->
    <form name="Kalkulator"> 
     <!--Terdapat 2 bagian yaitu name form dan name elemen form. dimana Name form adalah Kalkulator dan name elemen form 
         adalah Bilangan1 dan Bilangan2-->
      <table style="margin-left:auto;margin-right:auto" class="table">
        <tr><td colspan="3" align ="center"><h1>KALKULATOR</h1></td></tr>
        <tr><td>Bilangan 1</td><td>:</td>
        <td><input type="number" name="Bilangan1">
        <input class="button" type="button" onclick="tambah()" value="  +  "> <!--Tombol tambah akan memanggil fungsi tambah dengan event onclick--> 
        <input class="button" type="button" onclick="kurang()" value="  -  "> <!--Tombol kurang akan memanggil fungsi kurang dengan event onclick--> 
        </td></tr>
        <tr><td>Bilangan 2</td><td>:</td>
        <td><input type="number" name="Bilangan2">
        <input class="button" type="button" onclick="kali()" value="  x  "> <!--Tombol kali akan memanggil fungsi kali dengan event onclick--> 
        <input class="button" type="button" onclick="bagi()" value="  /  "> <!--Tombol bagi akan memanggil fungsi bagi dengan event onclick--> 
        </td></tr>
        <tr><td>Hasil</td><td>:</td><td><input type="number" name="hasil"></td></tr>
      </table>
    </form>
</head>
    <body>
        <!--style css-->
            <style type="text/css">
            .button{ 
                     background-color: #FF7F50; 
                     font-size:9pt;
                   }
            .table{
                     color: #8B4513; 
                     font-size:18pt;
                     background-image:url("kalkulator.jpg");
                     margin:100px;
                     padding:50px;
                     background-size: 100%
                  }
            </style>
            <!--Pada style css diatas terdapat class button dan table. dimana, Pada class button,mengatur warna 
                background pada button #FF7F50 untuk warna coral dan Pada class table yang diatur gambar background 
                yaitu kalkulator.jpg, margin 100 pixel dan padding 50 pixel.-->
    </body>
</html>
