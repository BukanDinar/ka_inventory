<?php
include("konek.php");
if(isset($_POST['daftar1'])){
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $saldo = $_POST['saldo'];

    $sql = "INSERT INTO pelanggan (nama_pelanggan, jenis_kelamin, alamat, no_hp, saldo) VALUES ('$nama_pelanggan', '$jenis_kelamin', '$alamat', '$no_hp', '$saldo')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-pelanggan.php?status=Data+Terekam');
    } else {
        header('Location: list-pelanggan.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>