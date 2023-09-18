<?php

// koneksi ke databese
$db = mysqli_connect("localhost", "root", "", "multiuser");


function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($POST){
    global $db;
    $NIS = $_POST['NIS'];
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Alamat = $_POST['Alamat'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $Nama_Bapak = $_POST['Nama_Bapak'];
    $Nama_Ibu = $_POST['Nama_Ibu'];
    $No_HP = $_POST['No_HP'];

    $query = "INSERT INTO siswa values ('$NIS', '$Nama' , '$Kelas' , '$Alamat', '$Jenis_Kelamin', '$Nama_Bapak', '$Nama_Ibu', '$No_HP')";
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
}

function hapus($NIS){
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE NIS=$NIS");
    return mysqli_affected_rows($db);
}

function ubah($POST){
    global $db;
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $asal_perusahaan = $_POST['asal_perusahaan'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $keperluan = $_POST['keperluan'];
    $status = $_POST['status'];
    $tujuan = $_POST['tujuan'];
    $divisi = $_POST['divisi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tanggal_janji = $_POST['tglJanji'] . ' '. $_POST['jamJanji'];
    $tanggal_buat = $_POST['tglBuat']. ' ' .$_POST['jamBuat'];
    $query = "UPDATE `tabel_resepsionis` SET `nama`='$nama',`asal_perusahaan`='$asal_perusahaan',`alamat`='$alamat',`no_hp`='$no_hp',`email`='$email',`keperluan`='$keperluan',`status`='$status',`tanggal_janji`='$tanggal_janji',`tanggal_buat`='$tanggal_buat',`jenis_kelamin`='$jenis_kelamin',`tujuan`='$tujuan',`divisi`='$divisi' WHERE `id`='$id'";
    
    mysqli_query($db, $query);
    return mysqli_affected_rows($db);

}

function cari($key)
{
    $query = "SELECT * FROM siswa
                WHERE
                NIS LIKE '%$key%' OR
                Nama LIKE '%$key%' OR
                Alamat LIKE '%$key%' OR
                Kelas LIKE '%$key%' OR
                Jenis_Kelamin LIKE '%$key%' OR
                Nama_Bapak LIKE '%$key%' OR
            Nama_Ibu LIKE '%$key%' OR
                No_HP LIKE '%$key%' 
                ";
    return query($query);
}
 
function registrasi($POST){
global $db;
$id_peng = ($POST["id_peng"]);
$nama = ($POST["nama"]);
$username = strtolower($POST["username"]);
$password = mysqli_real_escape_string($db,$POST["password"]);
$password2 = mysqli_real_escape_string($db,$POST["password2"]);
$level = strtolower($POST["level"]);

$result = mysqli_query($db,"SELECT username FROM pengguna WHERE username = '$username'");

if(mysqli_fetch_assoc($result)){
    echo "<script>
    alert('username sudah terdaftar')
    </script>";
    return false;
}

if($password !== $password2){
    echo "<script>
    alert('konfirmasi tidak sesuai!')</script>";
    return false;
}

mysqli_query($db , "INSERT INTO `pengguna`(`id_peng`,  `nama`, `username`, `password`,`level`) VALUES ('$id_peng','$nama','$username','$password','$level')");

return mysqli_affected_rows($db);
}