<!-- MOHAMMAD RIFA'I/19102044 -->
<!-- melakukan penginputan data kedalam database -->
<?php
include("koneksi.php");
?>

<html>
<head>   
<!-- css style -->    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

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
</style>
<title>Hasil</title>
</head>
    <body>
      <!-- bar navigasi -->
      <ul>
        <li><a class="active" href="index.php">Pilihan Beasiswa</a></li>
        <li><a href="daftar.php">Daftar</a></li>
        <li><a href="hasil.php">Hasil</a></li>
        <li><a href="grafik.php">Grafik</a></li>
      </ul>
          <h1>HASIL PENDAFTARAN BEASISWA</h1>
    <!-- menampilkan tabel output -->
        <table>
          <tr>
            <th>nama</th>
            <th>email</th>
            <th>nomor hp</th>
            <th>semester</th>
            <th>ipk</th>
            <th>pilihan_beasiswa</th>
            <th>berkas</th>
            <th>status_ajuan</th>
          </tr>
          <!-- menampilkan data yang ada didalam database -->
          <?php
          
          $query = mysqli_query($koneksi, "select * from tabel_hasil");
          while($row = mysqli_fetch_array($query))
          {
          ?>
          <tr>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['ipk']; ?></td>
            <td><?php echo $row['pilih']; ?></td>
            <td><?php echo $row['file']; ?></td>
            <td>belum di verifikasi</td>
          </tr>
          <?php }
          ?>
        </table>
    </body>
</html>