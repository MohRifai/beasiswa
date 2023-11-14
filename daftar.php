<!-- MOHAMMAD RIFA'I/19102044 -->
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
    
    <!-- menampilkan heading -->
    <h1 align="center">DAFTAR BEASISWA</h1>
    <!-- menampilkan tabel -->
        <table border="1" align="center" width="500px" cellspacing="0">
            <tr height="10px">
                <td align="left"><h5>Registrasi Beasiswa</h5></td>
            </tr>
            <tr>
                <td height="100px" valign="top">
                  <!-- menampilkan input type -->

                    <form id="validate_form" method="post" action="functions.php">

                    <label for="nama">Masukan Nama &ensp;&ensp;&ensp;&nbsp; : </label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Anda. . ." required><br>

                    <label for="inputEmail">Masukan Email &ensp;&ensp;&ensp;&ensp;:</label>
                    <input type="email" id="inputEmail" name="inputEmail" required><br>

                    <label for="number">Nomor HP &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;:</label>
                    <input type="tel" name="number" id="number" ><br>

                    <label for="semester">Semester Saat ini &ensp;&ensp;&nbsp;:</label>
                    <select id="semester" name="semester">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select><br>
                    
                    <label for="inputIPK">IPK:</label>
                    <input type="text" id="inputIPK" name="inputIPK" readonly><br><br>

                    <label for="inputPilihan">Pilihan Beasiswa:</label>
                    <select id="inputPilihan" name="inputPilihan" required>
                      <option value="">Pilih Pilihan Beasiswa</option>
                      <option value="Akademis">Akademis</option>
                      <option value="Non-Akademis">Non-Akademis</option>
                    </select><br><br>

                    <label for="inputFile">File PDF:</label>
                    <input type="file" id="inputFile" name="inputFile" accept=".pdf" required><br><br>

                    <button type="submit" name="submit" id="submit" value="submit">Daftar</button>
                    <button type="reset">Batal</button>

                    </form>
                    <script>
                      document.getElementById("inputEmail").addEventListener("change", function () {
                      var inputEmail = this.value;

                      // Mengambil nilai IPK dari database menggunakan AJAX
                      var xhr = new XMLHttpRequest();
                      xhr.onreadystatechange = function () {
                        if (xhr.readyState === 4 && xhr.status === 200) {
                          var ipk = xhr.responseText;
                          document.getElementById("inputIPK").value = ipk;

                          // Menonaktifkan pilihan dan input file jika IPK < 3
                          if (parseFloat(ipk) < 3) {
                            document.getElementById("inputPilihan").disabled = true;
                            document.getElementById("inputFile").disabled = true;
                            document.getElementById("submit").disabled = true;
                          } else {
                            document.getElementById("inputPilihan").disabled = false;
                            document.getElementById("inputFile").disabled = false;
                            document.getElementById("submit").disabled = false;
                          }
                        }
                      };
                      xhr.open("POST", "get_ipk.php", true);
                      xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                      xhr.send("inputEmail=" + inputEmail);
                      });
                    </script>

                </td>
            </tr>

        </table>
    </body>
</html>