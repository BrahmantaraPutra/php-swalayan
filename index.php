<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Swalayan Brahmantara Putra W</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgb(0, 0, 0);
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-bottom: 5px rgb(17, 198, 230);
        }

        .nav-separator {
            border: none;
            height: 7px;
            background-color: #00bcd4;
            margin: 0;
        }

        img {
            width: 250px;
            height: 250px;
        }

        nav {
            text-align: left;
            margin: 20px;
            margin-top: 50px;
            margin-left: 150px;
        }

        nav a {
            background-color: rgb(26, 176, 187);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: rgb(0, 0, 0);
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            margin-top: 50px;
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: rgb(0, 0, 0);
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            color: #007bff;
            text-decoration: none;
            margin: 0 5px;
        }

        td a:hover {
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin: 20px;
            font-weight: bold;
        }

        .main-footer {
            background-color: #111;
            color: #fff;
            text-align: center;
            padding: 20px 10px;
            font-size: 14px;
            margin-top: 50px;
            border-top: 7px solid #00bcd4;
        }
    </style>
</head>
<body>

    <header>
        <img src="img/4ceff667-2ab0-47f6-9617-98296b0ff3c1_removalai_preview.png" alt="Banner Sekolah">
        <h1>Sistem Informasi Swalayan Brahmantara P W<br>SMK N 2 Yogyakarta</h1>
    </header>
    <hr class="nav-separator">

    <nav>
        <a href="inputbarang.php">[+] Tambah Data Baru</a>
    </nav>

    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori Barang</th>
                <th>No Rak</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM barangsiswa";
            $query = mysqli_query($koneksi, $sql);

            while ($barang = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($barang['kode_barang']) . "</td>";
                echo "<td>" . htmlspecialchars($barang['nama_barang']) . "</td>";
                echo "<td>" . htmlspecialchars($barang['kategori_barang']) . "</td>";
                echo "<td>" . htmlspecialchars($barang['no_rak']) . "</td>";
                echo "<td>" . htmlspecialchars($barang['tanggalmasuk']) . "</td>";
                echo "<td>
                        <a href='edit.php?kode_barang=" . urlencode($barang['kode_barang']) . "'>Ubah</a> | 
                        <a href='delete.php?kode_barang=" . urlencode($barang['kode_barang']) . "' onclick=\"return confirm('Yakin ingin menghapus data ini?');\">Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="footer">
        Total Data: <?php echo mysqli_num_rows($query); ?>
    </div>

    <footer class="main-footer">
        <p>&copy; <?php echo date("Y"); ?> SMK N 2 Yogyakarta — Sistem Informasi Jaringan dan Aplikasi</p>
    </footer>

</body>
</html>
