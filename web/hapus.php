<?php 
session_start();
if ($_SESSION['level'] == "petugas" && "admin") {
   
}else{
  echo "<script>
  alert ('ANDA BUKAN PETUGAS');
  document.location.href = 'index.php';
  </script>
  
  ";
  session_destroy();

 
}
$db = mysqli_connect("localhost", "root" , "","multiuser");
$id = $_GET['id'];

$result = mysqli_query($db,"DELETE FROM tabel_resepsionis WHERE id=$id");


if(mysqli_affected_rows($db)> 0){
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = 'hal_petugas.php';</script>";
}else{
    echo "<script>
    alert('data gagal dihapus!');
    document.location.href = 'hal_petugas.php';</script>";
}

return mysqli_affected_rows($db);
?>