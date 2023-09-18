<?php
// koneksi db
require 'function.php';

//konfigurasi pagination
$jumlahdataperhalaman = 5;
$totaldata = count(query("SELECT * FROM tabel_resepsionis"));
$jumlahhalaman = ceil ($totaldata/$jumlahdataperhalaman);

if(isset($_GET["halaman"])) {
    $halamanberapa = $_GET["halaman"];
} else {
    $halamanberapa = 1;
}
//deskripsikan bisa pakai kedua nya. (halaman dan tidak ada)
$awaldata = ($jumlahdataperhalaman * $halamanberapa) - $jumlahdataperhalaman;
$siswa = query("SELECT * FROM tabel_resepsionis ORDER BY NAMA ASC LIMIT $awaldata,$jumlahdataperhalaman");

// koneksi db

$batas   = 5;
        $halaman = @$_GET['halaman'];
            if(empty($halaman)){
                $posisi  = 0;
                $halaman = 1;
            }
            else{
                $posisi  = ($halaman-1) * $batas;
            }
// ambil data query


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/style.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../otika-bootstrap-admin-template/assets/img/favicon.ico' />

    <title>Profile</title>
    <style>
      body{
        background-image: url('images/hero_1.jpg');
        height: 100vh;
        background-size: fill;
      }
    </style>
  </head>
  <body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar js-sticky-header site-navbar-target" role="banner" style="background-color: white;">

        <div class="container">
          <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="index.html" class="text-black"><img src="./storage/mirae-removebg-preview.png" alt="" height="50px"></a>
            </div>

            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li><a href="hal_petugas.php" class="nav-link ">Data</a></li>
                  <li><a href="profile.php" class="nav-link active">Profile</a></li>

                  <li> <a class="btn btn-outline-danger" href="logout.php" style="padding: .45rem 1.5rem .35rem;">
                  LOGOUT
                </a></li>
              

                </ul>
              </nav>

            </div>

            <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>
        </div>

        
      </header>

<div class="container">
    <div class="row">
        <div class="col">

        <div class="card" style="width: 900;margin-top:70px;margin-left:20px;">
  <div class="card-body">
    <h5 class="card-title">Who We Are</h5>
    <h6 class="card-subtitle mb-2 text-muted">Sekuritas Terbaik</h6>
    <p class="card-text">Menawarkan pelayanan terbaik sebagai teman sekuritas anda!
        <br>
        Keberhasilan klien kami adalah yang terpenting - kesuksesan mereka adalah kesuksesan kami. Kami membangun dan membina hubungan jangka panjang dengan klien kami dengan menggunakan strategi investasi kami yang telah terbukti.
        <br>
        Di Mirae Asset, kami sangat menyadari tanggung jawab kami. Sebagai warga negara yang baik, kami bertujuan untuk memberikan kembali kepada komunitas tempat kami tinggal dan secara aktif mendukung dan berpartisipasi dalam sejumlah inisiatif di dalamnya.
        <br>
        Kami menilai setiap peluang investasi secara objektif dan tidak memihak total. Kemandirian membuat kami berbeda dan membantu memastikan bahwa keputusan kami selaras dengan kebutuhan klien kami.

<br>

         </p>
   
  </div>
</div>
        </div>
        <div class="col">
<img src="mirae-bg.png" alt="" style="margin-top: 65px;">
        </div>
    </div>
</div>
   
  


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script src="../otika-bootstrap-admin-template/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../otika-bootstrap-admin-template/assets/js/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/advance-table.js"></script>
  <!-- Template JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/custom.js"></script>
  </body>
</html>