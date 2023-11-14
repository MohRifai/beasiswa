<!-- melakukan penginputan data kedalam database -->
<?php
include("koneksi.php");
if(isset($_REQUEST['submit'])){
    $nama = $_REQUEST['nama'];
    $email = $_REQUEST['inputEmail'];
    $number = $_REQUEST['number'];
    $semester = $_REQUEST['semester'];
    $ipk = $_REQUEST['inputIPK'];
    $pilih = $_REQUEST['inputPilihan'];
    $file = $_REQUEST['inputFile'];

    $insert_query = mysqli_query($koneksi, "insert into tabel_hasil set nama='$nama', email='$email', number='$number'
    ,semester='$semester', ipk='$ipk',pilih='$pilih', file='$file'");
    
}


?>

<html>
<head>
<script type="text/javascript">
function pindah(url)
{
window.location = url;
}
</script>
</head>
<body>
<h1>data berhasil ditambahkan</h1>
<input type="button" onclick="pindah('hasil.php')" value="oke" <br/><br/>
</body>
</html>