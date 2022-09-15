<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';

if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM pantai WHERE id='$id'";
  $result = mysqli_query($koneksi, $query);
  // jika data gagal diambil maka akan tampil error berikut
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }
  // mengambil data dari database
  $data = mysqli_fetch_assoc($result);
  // apabila data tidak ada pada database maka akan dijalankan perintah ini
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='index.php';</script>";
  }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke index.php
  echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
?>


<html>

<head>
  <title>CRUD Produk dengan gambar - Gilacoding</title>
  <style type="text/css">
    * {
      font-family: "Trebuchet MS";
    }

    h1 {
      text-transform: uppercase;
      color: salmon;
    }

    button {
      background-color: salmon;
      color: #fff;
      padding: 10px;
      text-decoration: none;
      font-size: 12px;
      border: 0px;
      margin-top: 20px;
    }

    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }

    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }

    div {
      width: 100%;
      height: auto;
    }

    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
  </style>
</head>

<body>
  <br>
  <br>
  <center>
    <h1>Edit Wisata <?php echo $data['wisata']; ?></h1>
    <center>
      <form method="POST" action="./update.php" enctype="multipart/form-data">
        <section class="base">
          <!-- menampung nilai id produk yang akan di edit -->
          <input name="id" value="<?php echo $data['id']; ?>" hidden />
          <div>
            <label>Nama Wisata</label>
            <input type="text" name="wisata" value="<?php echo $data['wisata']; ?>" autofocus="" required="" />
          </div>
          <div>
            <label>Kategori</label>
            <input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" />
          </div>
          <div>
            <label>Fasilitas</label>
            <input type="text" name="fasilitas" required="" value="<?php echo $data['fasilitas']; ?>" />
          </div>
          <div>
            <label>Alamat</label>
            <input type="text" name="alamat" required="" value="<?php echo $data['alamat']; ?>" />
          </div>
          <div>
            <label>Desa</label>
            <input type="text" name="desa" required="" value="<?php echo $data['desa']; ?>" />
          </div>
          <div>
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" required="" value="<?php echo $data['kecamatan']; ?>" />
          </div>
          <div>
            <label>LatLong</label>
            <input type="text" name="lat_long" required="" value="<?php echo $data['lat_long']; ?>" />
          </div>
          <div>
            <label>Gambar Wisata</label>
            <img src="gambar/<?php echo $data['gambar_wisata']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
            <input type="file" name="gambar_wisata" />
            <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah gambar produk</i>
          </div>
          <div>
            <br>
            <button class="btn btn-danger ml-1" type="submit">Simpan Perubahan</button>
            <br>
            <br>
            <a href="./index.php" class="btn btn-danger ml-1">Batal</a>
          </div>
        </section>
      </form>
</body>

</html>


<?php
require_once '../layout/_bottom.php';
?>