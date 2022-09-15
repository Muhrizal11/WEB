<?php
$host = "localhost";
$user = "wisatai3_dbpantai";
$pass = "wisatai3_dbpantai";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, "wisatai3_dbpantai") or die("Tidak ada database yang dipilih!");
