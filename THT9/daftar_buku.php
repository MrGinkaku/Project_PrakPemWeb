<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Import kelas DaftarBuku
include_once "DaftarBuku.php";

// Buat objek DaftarBuku
$daftarBuku = new DaftarBuku();

// Tampilkan halaman daftar buku
include_once "daftar_buku.html";
