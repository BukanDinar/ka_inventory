<?php
include("konek.php");
if( isset($_GET['kode_supplier']) ){
    $kode_supplier = $_GET['kode_supplier'];
    $sql = "DELETE FROM supplier WHERE kode_supplier='$kode_supplier'";
 
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: list-supplier.php?status=Data+Berhasil+Dihapus');
    }else{
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>