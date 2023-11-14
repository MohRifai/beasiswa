<!DOCTYPE html>
<html>
<head>
    <script src="js/Chart.js"></script>
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
</head>
<body>
    <!-- bar navigasi -->
    <ul>
        <li><a class="active" href="index.php">Pilihan Beasiswa</a></li>
        <li><a href="daftar.php">Daftar</a></li>
        <li><a href="hasil.php">Hasil</a></li>
        <li><a href="grafik.php">Grafik</a></li>
    </ul>
    <br>
    <h3>Grafik Beasiswa berdasarkan pilihan beasiswa</h3>
    <canvas id="myChart"></canvas>
    <?php
    //menghubungkan file dengan database
    $kon = mysqli_connect("localhost","root","","db_beasiswa");
    //Query untuk menampilkan tabel beasiswa
        $pilihan_beasiswa= "";
        $jumlah1=null;

        $sql="select pilih,COUNT(*) as 'total' from tabel_hasil GROUP by pilih";

    $hasil=mysqli_query($kon,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        $pil1=$data['pilih'];
        $pilihan_beasiswa .= "'$pil1'". ", ";

        $jum1=$data['total'];
        $jumlah1 .= "$jum1". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',

        // The data for our dataset
        data: {
            labels: [<?php echo $pilihan_beasiswa; ?>],
            datasets: [{
                label:'Pilihan Beasiswa',
                backgroundColor: ['rgb(60, 179, 113)', 'rgba(56, 86, 255, 0.87)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah1; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>


</body>
</html>