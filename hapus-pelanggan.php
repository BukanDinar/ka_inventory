<?php
include("konek.php");
if( isset($_GET['kode_pelanggan']) ){
    $kode_pelanggan = $_GET['kode_pelanggan'];
    $sql = "DELETE FROM pelanggan WHERE kode_pelanggan='$kode_pelanggan'";
 
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: list-pelanggan.php?status=Data+Berhasil+Dihapus');
    }else{
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>