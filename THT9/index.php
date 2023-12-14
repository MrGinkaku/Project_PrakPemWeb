<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Tampilkan halaman index.html
include_once "index.html";
?>