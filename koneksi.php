<?php
$host = "localhost";
$user = "root";
$pass = "";

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysqli_select_db($koneksi, "gis") or die("Tidak ada database yang dipilih!");
