<?php
include('koneksi.php');

if (isset($_POST['simpan'])) {
    $kode_barang     = $_POST['kode_barang']; 
    $nama_barang     = $_POST['nama_barang'];
    $kategori_barang = $_POST['kategori_barang'];
    $no_rak          = $_POST['no_rak'];
    $tanggalmasuk    = $_POST['tanggalmasuk'];

   
    if (empty($kode_barang) || empty($nama_barang) || empty($kategori_barang) || empty($no_rak) || empty($tanggalmasuk)) {
        die("Semua field harus diisi!");
    }

    
    $sql = "UPDATE barangsiswa SET 
                nama_barang = ?, 
                kategori_barang = ?, 
                no_rak = ?, 
                tanggalmasuk = ?
            WHERE kode_barang = ?";

    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "sssss", $nama_barang, $kategori_barang, $no_rak, $tanggalmasuk, $kode_barang);

    if (mysqli_stmt_execute($stmt)) {
        header('Location: index.php?status=sukses');
        exit;
    } else {
        header('Location: index.php?status=gagal');
        exit;
    }

    mysqli_stmt_close($stmt);
} else {
    die("Akses dilarang");
}
?>
