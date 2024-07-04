<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = 'bookings.txt';
    if (file_exists($filename)) {
        file_put_contents($filename, ''); // Mengosongkan isi file
        echo "Daftar pemesanan berhasil dihapus.";
    } else {
        echo "File tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Daftar Pemesanan</title>
</head>
<body>
    <h1>Hapus Daftar Pemesanan Tiket</h1>
    <form action="delete_bookings.php" method="POST">
        <button type="submit">Hapus Semua Pemesanan</button>
    </form>
    <p><a href="http://localhost/index.html">Kembali ke Beranda</a></p>
</body>
</html>
