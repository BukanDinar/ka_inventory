<?php
include("konek.php");
if( isset($_GET['kode_petugas']) ){
    $kode_petugas = $_GET['kode_petugas'];
    $sql = "DELETE FROM petugas WHERE kode_petugas='$kode_petugas'";
 
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: list-petugas.php?status=Data+Berhasil+Dihapus');
    }else{
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>