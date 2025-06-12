<?php
include("koneksi.php");

if (!isset($_GET['kode_barang'])) {
    die("Barang tidak ditemukan");
}

$kode_barang = mysqli_real_escape_string($koneksi, $_GET['kode_barang']);
$sql = "SELECT * FROM barangsiswa WHERE kode_barang = '$kode_barang'";
$query = mysqli_query($koneksi, $sql);
$alat = mysqli_fetch_assoc($query);

if (!$alat) {
    die("Data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Barang</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .form-container {
            background: #ffffff;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 12px 0 6px;
            font-weight: 600;
            color: #444;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        input[readonly] {
            background-color: #eee;
            color: #888;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background-color: rgb(6, 171, 212);
            color: white;
            border: none;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: rgb(0, 0, 0);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Edit Data Barang</h2>
    <form action="proses-edit.php" method="POST">
        <label for="kode_barang">Kode Barang</label>
        <input type="text" id="kode_barang" value="<?php echo $alat['kode_barang']; ?>" readonly>
        <input type="hidden" name="kode_barang" value="<?php echo $alat['kode_barang']; ?>">

        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" value="<?php echo $alat['nama_barang']; ?>" required>

        <label for="kategori_barang">Kategori Barang</label>
        <input type="text" name="kategori_barang" id="kategori_barang" value="<?php echo $alat['kategori_barang']; ?>" required>

        <label for="no_rak">Nomor Rak</label>
        <input type="text" name="no_rak" id="no_rak" value="<?php echo $alat['no_rak']; ?>" required>

        <label for="tanggalmasuk">Tanggal Masuk</label>
        <input type="date" name="tanggalmasuk" id="tanggalmasuk" value="<?php echo $alat['tanggalmasuk']; ?>" required>

        <input type="submit" name="simpan" value="Simpan Perubahan">
    </form>
</div>

</body>
</html>
