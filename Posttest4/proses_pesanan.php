<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stars Coffee - Pesanan Anda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content-pesanan">
        <div class="result-box">
            <h3>Pesanan Anda:</h3>
            <?php
            // Ambil data pesanan dari formulir
            $name = $_POST['nama'];
            $menu = $_POST['menu'];
            $jumlah = $_POST['jumlah'];

            // Tampilkan hasil pesanan
            echo "<p>Nama: $name</p>";
            echo "<p>Pesanan: $menu</p>";
            echo "<p>Jumlah: $jumlah</p>";
            ?>
            <!-- Tambahkan tombol kembali ke halaman menu utama-->
            <div class="button-box">
            <a href="index.html">Kembali ke Menu</a>
            </div>
        </div>
    </div>
</body>
</html>

