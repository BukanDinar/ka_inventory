<?php
include("konek.php");
if(isset($_POST['daftar1'])){
    $nama_supplier = $_POST['nama_supplier'];
    $nama_kontak = $_POST['nama_kontak'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $saldo = $_POST['saldo'];

    $sql = "INSERT INTO supplier (nama_supplier, nama_kontak, alamat, hp, saldo) VALUES ('$nama_supplier', '$nama_kontak', '$alamat', '$hp', '$saldo')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-supplier.php?status=Data+Terekam');
    } else {
        header('Location: list-supplier.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>