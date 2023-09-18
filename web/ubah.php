<?php
session_start();
// cek apakah yang mengakses halaman ini sudah login

if ($_SESSION['level'] == "petugas" ) {
   
}else{
  echo "<script>
  alert ('SILAHKAN LOGIN SEBAGAI PETUGAS');
  </script>
  document.location.href = 'index.php';
  ";
  session_destroy();

 
}
require 'function.php';
$id = $_GET["id"];
$resepsionis = query("SELECT * FROM tabel_resepsionis WHERE id = $id")[0];
// cek button tambah data sudah ditekan atau belom
if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('data berhasil diubah!');
        document.location.href = 'hal_petugas.php';
        </script>";
    } else {
        echo "<script>
        alert('data gagal diubah!');
        document.location.href = 'hal_petugas.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- create-post.html  21 Nov 2019 04:05:02 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Ubah</title>
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
                    <h4>Ubah Data</h4>
                </div>
                <input type="hidden" name="id" value="<?= $resepsionis["id"] ?>">
                <div class="card-body">
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7"> <input type="text" class="form-control" name="nama" value="<?= $resepsionis["nama"] ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Asal Perusahaan</label>
                        <div class="col-sm-12 col-md-7"> <input type="text" class="form-control" name="asal_perusahaan" value="<?= $resepsionis["asal_perusahaan"] ?>"> </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jenis Kelamin</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="jenis_kelamin">
                          <option value="Pria"<?php if ($resepsionis['jenis_kelamin'] == 'Pria') echo 'selected="selected"'; ?>>Pria</option>
                          <option value="Wanita"<?php if ($resepsionis['jenis_kelamin'] == 'Wanita') echo 'selected="selected"'; ?>>Wanita</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Alamat</label>
                        <div class="col-sm-12 col-md-7"> <input type="text" class="form-control" name="alamat" value="<?= $resepsionis["alamat"] ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No HP</label>
                        <div class="col-sm-12 col-md-7"> <input type="text" class="form-control" name="no_hp" value="<?= $resepsionis["no_hp"] ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                        <div class="col-sm-12 col-md-7"> <input type="text" class="form-control" name="email" value="<?= $resepsionis["email"] ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keperluan</label>
                        <div class="col-sm-12 col-md-7"> <textarea class="summernote-simple" name="keperluan" ><?= $resepsionis["keperluan"] ?></textarea> </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tujuan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="tujuan">
                          <option value="Pesan" <?php if ($resepsionis['tujuan'] == 'Pesan') echo 'selected="selected"'; ?>>Pesan</option>
                          <option value="Janji" <?php if ($resepsionis['tujuan'] == 'Janji') echo 'selected="selected"'; ?>>Janji</option>
                          <option value="Penitipan" <?php if ($resepsionis['tujuan'] == 'Penitipan') echo 'selected="selected"'; ?>>Penitipan</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Divisi</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="divisi">
                          <option value="Marketing"<?php if ($resepsionis['divisi'] == 'Marketing') echo 'selected="selected"'; ?>>Marketing</option>
                          <option value="IT"<?php if ($resepsionis['divisi'] == 'IT') echo 'selected="selected"'; ?>>IT</option>
                          <option value="Sales"<?php if ($resepsionis['divisi'] == 'Sales') echo 'selected="selected"'; ?>>Sales</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                        <div class="col-sm-12 col-md-7"> <select class="form-control selectric" name="status">
                                <option value="mendesak" <?php if ($resepsionis['status'] == 'mendesak') echo 'selected="selected"'; ?>>Mendesak</option>
                                <option value="normal" <?php if ($resepsionis['status'] == 'normal') echo 'selected="selected"'; ?>>Tidak mendesak</option>
                            </select> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Janji</label>
                        <div class="col-sm-12 col-md-7"> <input type="date" class="form-control" name="tglJanji" value="<?= date('Y-m-d', strtotime($resepsionis["tanggal_janji"])); ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam Janji</label>
                        <div class="col-sm-12 col-md-7"> <input type="time" class="form-control" name="jamJanji" value="<?= date('H:i', strtotime($resepsionis["tanggal_janji"])); ?>" > </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tanggal Buat</label>
                        <div class="col-sm-12 col-md-7"> <input type="date" class="form-control" name="tglBuat" value="<?= date('Y-m-d', strtotime($resepsionis["tanggal_buat"])); ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jam Buat</label>
                        <div class="col-sm-12 col-md-7"> <input type="time" class="form-control" name="jamBuat"  value="<?= date('H:i', strtotime($resepsionis["tanggal_buat"])); ?>"> </div>
                    </div>
                    <div class="form-group row mb-4"> <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7"> <button class="btn btn-primary" type="submit" name="submit">Edit <i class="fas fa-edit"></i></button> </div>
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