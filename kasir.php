<?php
    include 'koneksi.php';
    session_start();
?>

<h1>Selamat Datang di Halaman <?php echo $_SESSION['role']; ?></h1>