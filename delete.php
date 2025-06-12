<?php

include("koneksi.php");

if (isset($_GET['kode_barang'])){
    $kode_barang = $_GET['kode_barang'];
    $kode_barang = mysqli_real_escape_string($koneksi, $_GET['kode_barang']);
    $sql = "DELETE FROM barangsiswa WHERE kode_barang = '$kode_barang'";

    $query = mysqli_query($koneksi,$sql);
    if($query){
        header('Location: index.php');
    } else {
        die ("gagal menghapus");
    }
} else {
    die ("akses dilarang");
}
?>