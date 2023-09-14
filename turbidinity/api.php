<?php
// Informasi koneksi database
$host = 'localhost'; // Ganti dengan host database Anda
$dbname = 'kekeruhan_air'; // Ganti dengan nama database Anda
$username = 'root'; // Ganti dengan nama pengguna database Anda
$password = ''; // Ganti dengan kata sandi database Anda

// Menerima data dari permintaan POST
$data = json_decode(file_get_contents("php://input"));

if ($data && isset($data->sensor_data)) {
    $kekeruhan = $data->sensor_data;

    try {
        // Buat koneksi PDO
        $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

        // Atur mode penanganan kesalahan ke mode pengecualian
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Siapkan pernyataan SQL untuk memasukkan data ke dalam tabel
        $sql = "INSERT INTO nilai_kekeruhan (waktu, kekeruhan) VALUES (NOW(), :sensor_data)";

        // Siapkan pernyataan PDO
        $stmt = $pdo->prepare($sql);

        // Bind parameter
        $stmt->bindParam(':sensor_data', $kekeruhan, PDO::PARAM_STR);

        // Eksekusi pernyataan SQL
        $stmt->execute();

        // Kirim respons ke ESP32
        echo "Data berhasil dimasukkan ke dalam database.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Tutup koneksi PDO
    $pdo = null;
} else {
    echo "Invalid data received.";
}
?>
