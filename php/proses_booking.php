<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);

    $data = "Nama: $name, Email: $email, Tanggal Kunjungan: $date\n";

    file_put_contents('bookings.txt', $data, FILE_APPEND);
    header('Location:http://localhost/museum_nusantara/php/lihat_booking.php');
}
?>

    <p><a href="http://localhost/index.html">Kembali ke Beranda</a></p>


