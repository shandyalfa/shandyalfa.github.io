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

// Mengambil data dari tabel pesan_kontak
$sql = "SELECT id, nama_lengkap, email, nomor_hp, pesan, waktu FROM pesan_kontak";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data dalam bentuk tabel
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Pesan</th>
                <th>Waktu</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["nama_lengkap"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["nomor_hp"]. "</td>
                <td>" . $row["pesan"]. "</td>
                <td>" . $row["waktu"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada pesan yang ditemukan.";
}

// Menutup koneksi
$conn->close();
?>
