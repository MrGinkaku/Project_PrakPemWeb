<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Import kelas PengembalianBuku
include_once "PengembalianBuku.php";

// Buat objek PengembalianBuku
$pengembalianBuku = new PengembalianBuku();

// Tampilkan halaman pengembalian buku
include_once "pengembalian_buku.html";

if (isset($_POST['judul']) && isset($_POST['peminjam'])) {
    $judul = $_POST['judul']; // Anggap bahwa input judul berasal dari form
    $peminjam = $_POST['peminjam']; // Anggap bahwa input peminjam berasal dari form

    // Lakukan peminjaman buku
    $result = $pengembalianBuku->kembalikanBuku($judul, $peminjam);
    echo $result;
}