<?php
include("konek.php");
if(isset($_POST['simpan'])){
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $stock = $_POST['stock'];
    $stockmin = $_POST['stockmin'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $disk = $_POST['disk'];
    $sql = "UPDATE tabel_barang SET nama_barang='$nama_barang', stock='$stock', stockmin='$stockmin', harga_jual='$harga_jual',harga_beli='$harga_beli', disk='$disk' WHERE kode_barang='$kode_barang'";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location:list-barang.php?status=Data+Berhasil+Dirubah');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}else{
    die("Akses dilarang...");
}

?>