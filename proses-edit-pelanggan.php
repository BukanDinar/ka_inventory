<?php
include("konek.php");
if(isset($_POST['simpan'])){
    $kode_pelanggan = $_POST['kode_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $saldo = $_POST['saldo'];
    $sql = "UPDATE pelanggan SET nama_pelanggan='$nama_pelanggan', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp',saldo='$saldo' WHERE kode_pelanggan='$kode_pelanggan'";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location:list-pelanggan.php?status=Data+Berhasil+Dirubah');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}else{
    die("Akses dilarang...");
}

?>