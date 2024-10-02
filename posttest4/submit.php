<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL
$password = "";      // Ganti dengan password MySQL
$dbname = "pmb_db";  // Menggunakan database 'pmb_db'

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil data dari form
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$nomor_hp = $_POST['nomor_hp'];
$pesan = $_POST['pesan'];

// Menyimpan data ke tabel pesan_kontak
$sql = "INSERT INTO pesan_kontak (nama_lengkap, email, nomor_hp, pesan)
VALUES ('$nama_lengkap', '$email', '$nomor_hp', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();
?>
