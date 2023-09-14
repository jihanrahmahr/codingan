<?php
// Mendapatkan data yang dikirim dari formulir login
include "conn.php";
$username = $_POST['username'];
$password = $_POST['password'];



// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek kredensial pengguna
$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($query);

if ($result->num_rows == 1) {
    // Login berhasil, arahkan ke halaman selanjutnya
    header("Location: index.php");
    exit();
} else {
    header("Location: login.php");
   
}

// Menutup koneksi ke database
$conn->close();
?>
