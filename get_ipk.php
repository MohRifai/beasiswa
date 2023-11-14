<?php
include("koneksi.php");

// Mengambil email yang dikirimkan melalui AJAX
$inputEmail = $_POST['inputEmail'];

// Mengambil nilai IPK dari database
$sql = "SELECT ipk FROM ipk_fix WHERE email = '$inputEmail'";
$result = $koneksi->query($sql);

if ($result->num_rows > 0) {
    // Jika email ditemukan, kirimkan nilai IPK
    while ($row = $result->fetch_assoc()) {
        $ipk = $row["ipk"];
        echo $ipk;
    }
} else {
    // Jika email tidak ditemukan, kirimkan pesan error atau nilai IPK default
    echo "0.00";
}

// Menutup koneksi
$koneksi->close();
?>
