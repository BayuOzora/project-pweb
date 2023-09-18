
<?php
session_start();
// cek apakah yang mengakses halaman ini sudah login

if ($_SESSION['level'] == "viewer") {
   
}else if($_SESSION['level'] == ""){
  echo "<script>
  alert ('Silahkan Login');
  document.location.href = 'index.php';
  </script>";
  session_destroy();
}else if($_SESSION['level'] ==  'user' || 'petugas'){
  echo "<script>
  alert ('ANDA BUKAN VIEWER');
  document.location.href = 'index.php';
  </script>
  "; 
  session_destroy();

 
}
// koneksi db
require 'function.php';

//konfigurasi pagination

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
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
 
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/style.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../otika-bootstrap-admin-template/assets/img/favicon.ico' />

  <title>Data</title>
  <style>
    body {
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



  <header class="site-navbar js-sticky-header site-navbar-target" role="f" style="background-color: white;">

    <div class="container">
      <div class="row align-items-center position-relative">


        <div class="site-logo">
          <a href="index.html" class="text-black"><img src="./storage/mirae-removebg-preview.png" alt="" height="50px"></a>
        </div>

        <div class="col-12">
          <nav class="site-navigation text-right ml-auto " role="navigation">

            <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
          
             
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

  
             
    <div class="card" style="margin-top: 75px;margin:30px;">
    <div class="card-header">
      <h4>Data Resepsionis</h4>

    </div>

    <div class="card-body">
    
    <div class="table-responsive">
      
         <table class="table table-striped" id="example">
                      <thead>
            <tr>
            <th>#</th>
              <th>ID</th>
            
              <th>Nama</th>
              <th>Asal Perusahaan</th>
              <th>Alamat</th>
              <th>No HP</th>
              <th>Email</th>
              <th>Keperluan</th>
              <th>Status</th>
              <th>Tanggal Janji</th>
              <th>Tanggal Buat</th>
             
            </tr>
          </thead>

          <tbody>

            <?php
            $no =1;
              $data = mysqli_query($db, "SELECT * FROM tabel_resepsionis ORDER BY id");
            
            while ($row = mysqli_fetch_array($data)) {

            ?>

              <tr> 
                <td><?= $no++; ?></td>
              

                <td><?= $row["id"]; ?></td>
               
                <td><?= $row["nama"]; ?></td>
                <td><?php echo $row["asal_perusahaan"]; ?></td>
                <td><?php echo $row["alamat"]; ?></td>
                <td>
                  <?php echo $row["no_hp"]; ?>
                </td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["keperluan"]; ?></td>
                <td><?php echo $row["status"]; ?></td>
                <td><?php echo $row["tanggal_janji"]; ?></td>
                <td><?php echo $row["tanggal_buat"]; ?></td>
                

              </tr>

            <?php } ?>

          </tbody>
                      </table>
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
  <script src="../otika-bootstrap-admin-template/assets/bundles/datatables/datatables.min.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/js/advance-table.js"></script>
  <!-- Template JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/page/datatables.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/js/custom.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/bundles/izitoast/js/iziToast.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/page/toastr.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
  <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  </script>
</body>

</html>