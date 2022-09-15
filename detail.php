<?php 
include_once "header.php"; 
$id = $_GET['id'];
include_once "ambildata_id.php";

$obj = json_decode($data);
$titles="";
$id="";
$kat="";
$fas="";
$alamat="";
$desa="";
$kec="";
$latlong="";
foreach($obj->results as $item){
  $titles.=$item->wisata;
  $id.=$item->id;
  $kat.=$item->kategori;
  $fas.=$item->fasilitas;
  $alamat.=$item->alamat;
  $desa.=$item->desa;
  $kec.=$item->kecamatan;
  $latlong.=$item->lat_long;

}

?>
  <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_4.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Detail  Wisata</h1>
          </div>
        </div>
      </div>
    </div>

      <div class="container">
        <div class="col-md-15">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Wisata</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>Desa</td>
                 <td><h4><?php echo $desa ?></h4></td>
               </tr>
               <tr>
                 <td>Kecamatan</td>
                 <td><h4><?php echo $kec ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>Fasilitas</td>
                 <td><h4><?php echo $fas ?></h4></td>
               </tr>
               <tr>
                 <td>LatLong</td>
                 <td><h4><?php echo $latlong ?></h4></td>
               </tr>
             </table>
            </div>
</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>