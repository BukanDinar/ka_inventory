<?php
include("konek.php");
if(isset($_POST['daftar1'])){
    $nama_petugas = $_POST['nama_petugas'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $sql = "INSERT INTO petugas (nama_petugas, jabatan, username, password, level) VALUES ('$nama_petugas', '$jabatan', '$username', '$password', '$level')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-petugas.php?status=Data+Terekam');
    } else {
        header('Location: list-petugas.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>