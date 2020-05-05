<?php
include("konek.php");
if(isset($_POST['daftar1'])){
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $stockmin = $_POST['stockmin'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $disk = $_POST['disk'];

    $sql = "INSERT INTO tabel_barang (nama_barang, stock, stockmin, harga_jual, harga_beli, disk) VALUES ('$nama_barang', '$stock', '$stockmin', '$harga_jual', '$harga_beli', '$disk')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-barang.php?status=Data+Terekam');
    } else {
        header('Location: list-barang.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

?>