<?php
include("konek.php");
if(isset($_POST['simpan'])){
    $kode_supplier = $_POST['kode_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $nama_kontak = $_POST['nama_kontak'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $saldo = $_POST['saldo'];
    $sql = "UPDATE supplier SET nama_supplier='$nama_supplier', nama_kontak='$nama_kontak', alamat='$alamat', hp='$hp',saldo='$saldo' WHERE kode_supplier='$kode_supplier'";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location:list-supplier.php?status=Data+Berhasil+Dirubah');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}else{
    die("Akses dilarang...");
}

?>