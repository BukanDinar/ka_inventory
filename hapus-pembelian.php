<?php
include("konek.php");
if( isset($_GET['nomor_beli']) ){
    $nomor_beli = $_GET['nomor_beli'];
    $sql = "DELETE FROM pembelian WHERE nomor_beli='$nomor_beli'";
 
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location: pembelian.php?status=Data+Berhasil+Dihapus');
    }else{
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>