<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wisata Trenggalek</title>
    <?php include_once 'header.php';?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/datatables/datatables.min.css">
    <link rel="stylesheet" href="css/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg3.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Destination</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
            </div>
            <div class="container">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="2%">No.</th>
                  <th width="15%">Nama Wisata</th>
                  <th width="5%">Kategori</th>
                  <th width="20%">Fasilitas</th>
                  <th width="3%">Aksi</th>
                </tr>
              </thead>
              <?php
                 $data = file_get_contents('http://wisataingalek.my.id/ambildata');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $item->wisata; ?></td>
                <td><?php echo $item->kategori; ?></td>
                <td><?php echo $item->fasilitas; ?></td>
                <td class="ctr">
                  <div class="container">
                    <a target="_blank" href="detail.php?id=<?php echo $item->id; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                     <img src="images/eye.png" height="30px" width="30px" alt=""></a>&nbsp;
                  </div>
                </td>
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>
              
              </tbody>
            </table>
            </div>
            </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</body>
  <?php include 'footer.php'?>
</html>