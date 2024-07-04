<?php
echo "<h1>Daftar Pemesanan Tiket</h1>";

$filename = 'bookings.txt';

if (file_exists($filename)) {
    $bookings = file($filename);
    foreach ($bookings as $booking) {
        echo "<p>$booking</p>";
    }
} else {
    echo "<p>Tidak ada pemesanan yang ditemukan.</p>";
}
?>
<p><a href="../index.html">Kembali ke Beranda</a></p>
