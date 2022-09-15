<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
require_once '../crud/validjs.js';
?>
<html>
<head>
	<title>Form Pendaftaran</title>

	<script language="JavaScript" src="./validjs.js" type="text/javascript"></script>
</head>
<body>
<section class="section">
  <div class="section-header d-flex justify-content-between">
    <h1>Tambah Wisata</h1>
    <a href="./index.php" class="btn btn-light">Kembali</a>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <!-- // Form -->
	      	<form name="myform" action="./proses_tambah.php" method="post" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Nama Wisata</td>
                <td><input class="form-control" type="text" name="wisata" size="20" required></td>
              </tr>
             
              <tr>
                <td>Kategori</td>
                <td><input class="form-control" type="text" name="kategori" size="20" required></td>
              </tr>

              <tr>
                <td>Fasilitas</td>
                <td><input class="form-control" type="text" name="fasilitas" size="20" required></td>
              </tr>

              <tr>
                <td>Alamat</td>
                <td><input class="form-control" type="text" name="alamat" size="20" required></td>
              </tr>

              <tr>
                <td>Desa</td>
                <td><input class="form-control" type="text" name="desa" size="20" required></td>
              </tr>

              <tr>
                <td>Kecamatan</td>
                <td><input class="form-control" type="text" name="kecamatan" size="20" required></td>
              </tr>

              <tr>
                <td>LatLong</td>
                <td><input class="form-control" type="text" name="lat_long" size="20" required></td>
              </tr>
                    
              <tr>
                <td>Gambar Wisata</td>
                <td><input type="file" name="gambar_wisata" required="required">
				        <p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p></td>
              </tr> 
              <tr>
                <td>
                  	<div id='myform_errorloc' style='color:red'> </div>
                  <input class="btn btn-primary" type="submit" name="proses" value="Simpan">
                  <input class="btn btn-danger" type="reset" name="batal" value="Bersihkan"></td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</section>
<script language="JavaScript" type="text/javascript">
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
 frmvalidator.EnableOnPageErrorDisplaySingleBox();
 frmvalidator.EnableMsgsTogether();
 
  frmvalidator.addValidation("wisata","req","wisata belum di isi");
  frmvalidator.addValidation("wisata","maxlen=50","wisata Maximal  50");
  frmvalidator.addValidation("wisata","alpha_s","Wisata tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("kategori","req","kategori belum di isi");
  frmvalidator.addValidation("kategori","maxlen=250","kategori Maximal  250");
  frmvalidator.addValidation("kategori","alpha_s","kategori tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("fasilitas","req","fasilitas belum di isi");
  frmvalidator.addValidation("fasilitas","maxlen=250","fasilitas Maximal  250");
  frmvalidator.addValidation("fasilitas","alpha_s","fasilitas tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("alamat","req","alamat belum di isi");
  frmvalidator.addValidation("alamat","maxlen=100","alamat Maximal  100");
  frmvalidator.addValidation("alamat","alpha_s","alamat tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("desa","req","desa belum di isi");
  frmvalidator.addValidation("desa","maxlen=50","desa Maximal  50");
  frmvalidator.addValidation("desa","alpha_s","desa tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("kecamatan","req","kecamatan belum di isi");
  frmvalidator.addValidation("kecamatan","maxlen=50","kecamatan Maximal  50");
  frmvalidator.addValidation("kecamatan","alpha_s","kecamatan tidak boleh mengandung angka atau symbol");

  


</script>
<body>
</html>

<?php
require_once '../layout/_bottom.php';
?>
