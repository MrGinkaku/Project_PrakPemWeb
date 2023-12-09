<?php
session_start();

$servername = "127.0.0.1";
$username = "akmal123";
$password = "akmal12345";
$dbname = "project";

// koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// cek koneksi
if ($conn->connect_error) {
    die("Koneksi Eror: " . $conn->connect_error);
}

function Registrasi($conn, $username, $password) {
    // Cek apakah username sudah ada di database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        return "Username sudah digunakan!!";
    }

    // encrypt password user 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // memasukan data user ke database
    $insertQuery = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    if ($conn->query($insertQuery) === TRUE) {
        return "Registrasi Berhasil";
    } else {
        return "Error: " . $insertQuery . "<br>" . $conn->error;
    }
}

function Login($conn, $username, $password) {
    // Cek apakah username sudah ada di database
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        // verifikasi password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username; 
            return "Login berhasil !";
        } else {
            return "password salah !";
        }
    } else {
        return "Username tidak ada !";
    }
}

// memproses permintaan user
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'])) {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if ($_POST['action'] === 'register') {
            echo Registrasi($conn, $username, $password);
        } elseif ($_POST['action'] === 'login') {
            echo Login($conn, $username, $password);
        }
    }
}

$conn->close();
?>
