<?php
require_once '../helper/connection.php';

$wisata = $_POST['wisata'];
$kat = $_POST['kategori'];
$fas = $_POST['fasilitas'];
$alamat = $_POST['alamat'];
$desa = $_POST['desa'];
$kec = $_POST['kecamatan'];
$lat_long = $_POST['lat_long'];
$gambar_wisata = $_FILES['gambar_wisata']['name'];


//cek dulu jika ada gambar produk jalankan coding ini
if($gambar_wisata != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_wisata); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_wisata']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_wisata; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "insert into pantai(wisata,kategori, fasilitas, alamat, desa,kecamatan, lat_long, gambar_wisata) value('$wisata','$kat', '$fas', '$alamat', '$desa','$kec','$lat_long','$nama_gambar_baru' )";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='create.php';</script>";
            }
} else {
 $query = "insert into pantai(wisata,kategori, fasilitas, alamat, desa,kecamatan, lat_long, gambar_wisata) value('$wisata','$kat', '$fas', '$alamat', '$desa','$kec','$lat_long','$nama_gambar_baru' )null";
                  $result = mysqli_query($koneksi, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='index.php';</script>";
                  }
}
