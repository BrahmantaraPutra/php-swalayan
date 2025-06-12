<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Swalayan Brahmantara</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
        }
        h3 {
            margin: 0;
        }
        form {
            background-color: white;
            border-radius: 0 0 8px 8px;
            padding: 20px;
            max-width: 500px;
            margin: 120px auto 0 auto;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: rgb(12, 169, 197);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="submit"]:hover {
            background-color: rgb(0, 2, 1);
        }
    </style>
</head>
<body>
    <header>
        <h3>Input Data Barang</h3>
    </header>
    <form action="simpanbarang.php" method="POST">
        <label for="kode_barang">Kode :</label>
        <input type="text" name="kode_barang" id="kode_barang" required>

        <label for="nama_barang">Nama Barang :</label>
        <input type="text" name="nama_barang" id="nama_barang" required>

        <label for="kategori_barang">Kategori :</label>
        <input type="text" name="kategori_barang" id="kategori_barang" required>

        <label for="no_rak">Nomor Rak :</label>
        <input type="text" name="no_rak" id="no_rak" required>

        <label for="tanggalmasuk">Tanggal Masuk :</label>
        <input type="date" name="tanggalmasuk" id="tanggalmasuk" required>

        <input type="submit" name="simpan" value="Simpan">
    </form>
</body>
</html>
