<?php
include("konek.php");
if(isset($_POST['simpan'])){
    $kode_petugas = $_POST['kode_petugas'];
    $nama_petugas = $_POST['nama_petugas'];
    $jabatan = $_POST['jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $sql = "UPDATE petugas SET nama_petugas='$nama_petugas', jabatan='$jabatan', username='$username', password='$password',level='$level' WHERE kode_petugas='$kode_petugas'";
    $query = mysqli_query($db, $sql);
    if($query){
        header('Location:list-petugas.php?status=Data+Berhasil+Dirubah');
    }else{
        die("Gagal menyimpan perubahan...");
    }
}else{
    die("Akses dilarang...");
}

?>