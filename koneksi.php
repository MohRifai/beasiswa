
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_beasiswa";
$koneksi = mysqli_connect("$server","$username","$password");
$select_db = mysqli_select_db($koneksi, $database);

if(!$select_db){
    echo("koneksi gagal");
}
?>