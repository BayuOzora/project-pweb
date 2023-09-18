<?php
 session_start();

require 'function.php';

// ambil data atau query data siswa
$siswa = query("SELECT * FROM tabel_resepsionis ORDER BY NAMA ASC");



?>

<!DOCTYPE html>
<html>

<head>
<title>print data</title>
<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>
<center>
<h2>PRINT DATA</h2>
<form action="" method="post"> <div class="table">
<table border="2">
          <thead>
            <tr>
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

          <?php foreach ($siswa as $row): ?>

              <tr>

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

              <?php endforeach; ?>

          </tbody>
        </table> </div>

</center>

<script>

window.print();



</script>
</body>
</html>