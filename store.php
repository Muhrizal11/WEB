<?php
session_start();
require_once '../helper/connection.php';

$wisata = $_POST['wisata'];
$kat = $_POST['kategori'];
$fas = $_POST['fasilitas'];
$alamat = $_POST['alamat'];
$desa = $_POST['desa'];
$kec = $_POST['kecamatan'];
$lat_long = $_POST['lat_long'];

$query = mysqli_query($koneksi, "insert into pantai(wisata, kategori, fasilitas, alamat, desa, kecamatan, lat_long) value('$wisata', '$kat', '$fas', '$alamat','$desa','$kec','$lat_long')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => mysqli_error($koneksi)
  ];
  header('Location: ./index.php');
}
