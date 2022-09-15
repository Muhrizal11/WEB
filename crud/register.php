<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';
require_once '../crud/validjs.js';
?>

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
	      	<form name="myform" action="./proses_regis.php" method="post" enctype="multipart/form-data">
            <table cellpadding="8" class="w-100">

              <tr>
                <td>Username</td>
                <td><input class="form-control" type="text" name="username" size="20" required></td>
              </tr>
             
              <tr>
                <td>Password</td>
                <td><input class="form-control" type="text" name="password" size="20" required></td>
              </tr>
                              <td>
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
 
  frmvalidator.addValidation("username","req","username belum di isi");
  frmvalidator.addValidation("username","maxlen=50","username Maximal  50");
  frmvalidator.addValidation("username","alpha_s","username tidak boleh mengandung angka atau symbol");

    frmvalidator.addValidation("password","req","password belum di isi");
  frmvalidator.addValidation("password","maxlen=250","password Maximal  250");
  frmvalidator.addValidation("password","alpha_s","password tidak boleh mengandung angka atau symbol");

<?php
require_once '../layout/_bottom.php';
?>