<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Import kelas PeminjamanBuku
include_once "PeminjamanBuku.php";

// Tampilkan halaman peminjaman buku
include_once "peminjaman_buku.html";

// Buat objek PeminjamanBuku
$peminjamanBuku = new PeminjamanBuku();

// Tangkap data dari formulir jika ada
if (isset($_POST['judul']) && isset($_POST['peminjam'])) {
    $judul = $_POST['judul']; // Anggap bahwa input judul berasal dari form
    $peminjam = $_POST['peminjam']; // Anggap bahwa input peminjam berasal dari form

    // Lakukan peminjaman buku
    $result = $peminjamanBuku->pinjamBuku($judul, $peminjam);
    echo $result;
}
?>
