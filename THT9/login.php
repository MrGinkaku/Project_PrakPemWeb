<?php
session_start();

function Registrasi($username, $password) {
    // Membaca data pengguna yang sudah ada dari file
    $existingData = file_get_contents('data_user.txt');
    
    // Memecah data menjadi array per baris
    $existingUsers = explode(PHP_EOL, $existingData);

    // Mengecek apakah username sudah ada
    foreach ($existingUsers as $user) {
        $userData = explode(',', $user);

        if (count($userData) === 3) {
            list($existingId, $existingUsername, $existingPassword) = $userData;

            if ($existingUsername === $username) {
                return "Username sudah digunakan!!";
            }
        }
    }

    // Mendapatkan ID pengguna baru
    $newId = count($existingUsers) + 1;

    // encrypt password user 
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Menambahkan data pengguna baru ke dalam array
    $existingUsers[] = "$newId,$username,$hashedPassword";

    // Menggabungkan kembali array menjadi string dengan pemisah baris
    $newData = implode(PHP_EOL, $existingUsers);

    // Menyimpan data baru ke dalam file
    file_put_contents('data_user.txt', $newData, FILE_APPEND);

    // Menyimpan ID pengguna baru dalam session
    $_SESSION['idPengguna'] = $newId;

    return "Registrasi Berhasil. ID Pengguna Anda: $newId";
}

function Login($username, $password) {
    // Membaca data pengguna dari file
    $users = file('data_user.txt', FILE_IGNORE_NEW_LINES);

    // Mengecek apakah username dan password sesuai
    foreach ($users as $user) {
        $userData = explode(',', $user);

        // Check if the exploded data has the expected number of elements
        if (count($userData) === 3) {
            list($existingId, $existingUsername, $existingPassword) = array_map('trim', $userData);

            if ($existingUsername === $username && password_verify($password, $existingPassword)) {
                $_SESSION['username'] = $username;
                $_SESSION['idPengguna'] = $existingId;
                return "Login berhasil !";
            }
        }
    }

    return "Username atau password salah!";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['action'])) {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);

        if ($_POST['action'] === 'register') {
            echo Registrasi($username, $password);
        } elseif ($_POST['action'] === 'login') {
            echo Login($username, $password);
        }
    }
}
?>
