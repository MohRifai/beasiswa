<!-- MOHAMMAD RIFA'I/19102044 -->
<!-- menambahkan file koneksi.php pada program -->
<?php
include("koneksi.php");
?>
<html>
<head>
<!-- css style -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;}
.dropdown {
  float: left;
  overflow: hidden;
}
</style>
<title>Daftar Beasiswa</title>
</head>
    <body>
      <!-- bar navigasi -->
    <ul>
        <li><a class="active" href="index.php">Pilihan Beasiswa</a></li>
        <li><a href="daftar.php">Daftar</a></li>
        <li><a href="hasil.php">Hasil</a></li>
        <li><a href="grafik.php">Grafik</a></li>
    </ul>
    <!-- paragraf -->
    <h1>BEASISWA AKADEMIS</h1> <br>
    <p>Beasiswa akademis diberikan kepada individu berdasarkan prestasi akademik yang mereka capai. 
      Kriteria penilaian untuk beasiswa ini biasanya melibatkan nilai akademik yang tinggi, seperti rata-rata nilai, 
      peringkat kelas, atau hasil tes standar seperti SAT atau ACT. Beasiswa akademis juga dapat diberikan 
      berdasarkan pencapaian di bidang akademik tertentu, seperti ilmu pengetahuan, matematika, seni, atau 
      bidang studi lainnya. Tujuannya adalah untuk memberikan insentif kepada siswa yang memiliki prestasi 
      akademik yang luar biasa agar mereka dapat melanjutkan pendidikan mereka.</p>
      <br><h1>BEASISWA NON AKADEMIS</h1> <br>
    <p>Beasiswa non-akademis diberikan kepada individu berdasarkan faktor-faktor non-akademik, yang bisa mencakup 
      bakat, minat khusus, kegiatan ekstrakurikuler, kepemimpinan, pengabdian kepada masyarakat, atau latar belakang 
      pribadi yang unik. Beasiswa ini tidak terkait langsung dengan pencapaian akademik, tetapi lebih berkaitan 
      dengan kualitas dan potensi individu dalam bidang-bidang di luar akademik. Misalnya, beasiswa atletik diberikan 
      kepada siswa yang memiliki prestasi olahraga yang luar biasa, sementara beasiswa seni diberikan kepada individu 
      dengan bakat artistik yang menonjol.</p>
      <!-- menampilkan tombol daftar -->
      <button class="button button1" ><a href="daftar.php"> DAFTAR</a></button>
    </body>
</html>