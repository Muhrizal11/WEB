<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="icon" href="images/headicon.png" type="image" sizes="15x15">
    <title>Wisata Trenggalek</title>
    <?php include 'header.php'?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""
    />
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <script
      src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""
    ></script>
  </head>
  </head>
  <body>

   <div class="hero-wrap js-fullheight" style="background-image: url('images/bg2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Peta Wisata</h1>
          </div>
        </div>
      </div>
    </div>
  <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
<div id="mapid" class="hero-wrap js-fullheight" style="height: 800px"></div>
    <script>
      var mymap = L.map("mapid").setView([-8.222358214550088, 111.69939255540085], 10.5);


      L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
        {
          maxZoom: 18,
          attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: "mapbox/streets-v11",
          tileSize: 512,
          zoomOffset: -1,
        }
      ).addTo(mymap);
       var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("koordinatnya adalah " + e.latlng
                    .toString()
                    ) 
                .openOn(mymap);

            document.getElementById('latlong').value = e.latlng 
        }
        mymap.on('click', onMapClick); 
         
         <?php
        
        $mysqli = mysqli_connect('localhost', 'wisatai3_dbpantai', 'wisatai3_dbpantai', 'wisatai3_dbpantai');
        $tampil = mysqli_query($mysqli, "SELECT * from pantai"); 
        while($hasil = mysqli_fetch_array($tampil)){ ?> 

        L.marker([<?php echo str_replace(['[', ']', 'latlong', '(', ')'], '', $hasil['lat_long']); ?>]).addTo(mymap).bindPopup("<table><tr><td><img src='crud/gambar/<?= $hasil['gambar_wisata'] ?>'</td></tr><tr><td><?= $hasil['wisata'] ?></td><tr><td><?= $hasil['kategori'] ?></td></tr><tr><td><?= $hasil['fasilitas'] ?></td></tr></table>");


        <?php } ?>
        
    </script>
    </div>
        </div>
    
  </body>
  <?php include 'footer.php'?>
</html>