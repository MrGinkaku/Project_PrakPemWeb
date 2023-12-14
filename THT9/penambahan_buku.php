<?php
session_start();

// Cek apakah pengguna sudah login, jika tidak, alihkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

// Import kelas TambahBuku
include_once "TambahBuku.php";

// Buat objek TambahBuku
$tambahBuku = new TambahBuku();
include_once "tambah_buku.html";

// Contoh penggunaan dengan input dari user
if (isset($_POST['submit'])) {
    $judul = $_POST['judul']; // Anggap bahwa input judul berasal dari form
    $pengarang = $_POST['pengarang']; // Anggap bahwa input pengarang berasal dari form
    $tahunTerbit = $_POST['tahun']; // Anggap bahwa input tahun berasal dari form

    $result = $tambahBuku->tambahBuku($judul, $pengarang, $tahunTerbit);
    echo $result;
}
?>
