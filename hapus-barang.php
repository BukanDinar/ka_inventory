<?php
include("konek.php");
if( isset($_GET['kode_barang']) ){
    $kode_barang = $_GET['kode_barang'];
    $sql = "DELETE FROM tabel_barang WHERE kode_barang='$kode_barang'";
 
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: list-barang.php?status=Data+Berhasil+Dihapus');
    }else{
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>