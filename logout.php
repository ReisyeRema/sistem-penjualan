<?php
    //ini untuk memulai sesi
    session_start();

    //hapus semua data sesi
    session_unset();

    //hancurkan sesi
    session_destroy();

    header("location:login.php");
    exit;
?>