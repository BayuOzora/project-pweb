<?php 
session_start();
// cek apakah yang mengakses halaman ini sudah login

if ($_SESSION['level'] == "petugas" || "user") {
   
}else{
  echo "<script>
  alert ('ANDA TIDAK DAPAT MENAMBAH DATA');
  document.location.href = 'index.php';
  </script>
  
  ";
  session_destroy();

 
}
$db = mysqli_connect("localhost", "root", "", "multiuser");

if(isset($_POST['submit'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$asal_perusahaan = $_POST['asal_perusahaan'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$email = $_POST['email'];
$keperluan = $_POST['keperluan'];
$status = $_POST['status'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tujuan = $_POST['tujuan'];
$divisi = $_POST['divisi'];
$tanggal_janji = $_POST['tglJanji'] . ' '. $_POST['jamJanji'];
$tanggal_buat = $_POST['tglBuat']. ' ' .$_POST['jamBuat'];


$query = "INSERT INTO tabel_resepsionis values ('$id' ,'$nama' , '$asal_perusahaan','$alamat' , '$no_hp', '$email', '$keperluan','$status','$tanggal_janji','$tanggal_buat','$jenis_kelamin','$tujuan','$divisi')";

mysqli_query($db,$query);

if(mysqli_affected_rows($db) > 0){
    echo "<script>
    alert('data berhasil ditambahkan'); 
    document.location.href = 'hal_user.php'; </script>";
    
}else{
    echo "<script>
    alert('data gagal ditambahkan'); 
    document.location.href = 'hal_user.php'; </script>";
    
}
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- create-post.html  21 Nov 2019 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tambah</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/app.min.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/jquery-selectric/selectric.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/style.css">
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="../otika-bootstrap-admin-template/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='../otika-bootstrap-admin-template/assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div class="app">
    <div class="card">
        <form action="" method="post">
                  <div class="card-header">
                    <h4>Tambah Data</h4>
                  </div>
                  <div class="card-body">
                  <input type="hidden" name="id">
                  <div class="card-body">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Asal Perusahaan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="asal_perusahaan">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="jenis_kelamin">
                          <option value="Pria">Pria</option>
                          <option value="Wanita">Wanita</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="alamat">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="no_hp">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="email">
                      </div>
                    </div>
                 
                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keperluan</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea class="summernote-simple" name="keperluan"></textarea>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="tujuan">
                          <option value="Pesan">Pesan</option>
                          <option value="Janji">Janji</option>
                          <option value="Penitipan">Penitipan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Divisi</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="divisi">
                          <option value="Marketing">Marketing</option>
                          <option value="IT">IT</option>
                          <option value="Sales">Sales</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status">
                          <option value="mendesak">Mendesak</option>
                          <option value="normal">Tidak mendesak</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Janji</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tglJanji">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam Janji</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="jamJanji">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Buat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="tglBuat">
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam Buat</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="time" class="form-control" name="jamBuat">
                      </div>
                    </div>
                 
                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary" type="submit" name="submit">Tambah <i class="fas fa-plus"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
  </div>
  </form>
  <!-- General JS Scripts -->
  <script src="../otika-bootstrap-admin-template/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="../otika-bootstrap-admin-template/assets/bundles/summernote/summernote-bs4.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  
  <script src="../otika-bootstrap-admin-template/assets/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/page/create-post.js"></script>
  <!-- Template JS File -->
  <script src="../otika-bootstrap-admin-template/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="../otika-bootstrap-admin-template/assets/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js"></script>
  <script src="../otika-bootstrap-admin-template/assets/js/custom.js"></script>
</body>


<!-- create-post.html  21 Nov 2019 04:05:03 GMT -->
</html>
