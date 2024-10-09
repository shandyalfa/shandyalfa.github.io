<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $noTelepon = $_POST['NoTelepon'];
    $alamat = $_POST['Alamat'];
    $pendidikanTerakhir = $_POST['PendidikanTerakhir'];
    $posisiDilamar = $_POST['PosisiDilamar'];

    $sql = "INSERT INTO CalonPendaftar (Nama, Email, NoTelepon, Alamat, PendidikanTerakhir, PosisiDilamar) 
            VALUES ('$nama', '$email', '$noTelepon', '$alamat', '$pendidikanTerakhir', '$posisiDilamar')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftar berhasil ditambahkan!";
        header("Location: halaman.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/add&update.css">
    <title>Tambah Calon Pendaftar</title>
</head>
<body>
    <h1>Tambah Calon Pendaftar</h1>
    <form method="POST" action="">
    <table>
            <tr>
                <td>
                    <label for="Nama">Nama:</label>
                </td>
                <td>
                    <input type="text" name="Nama" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email">Email:</label>
                </td>
                <td>
                    <input type="email" name="Email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NoTelepon">No Telepon:</label>
                </td>
                <td>
                    <input type="text" name="NoTelepon">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Alamat">Alamat:</label>

                </td>
                <td>
                    <textarea name="Alamat"></textarea>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="PendidikanTerakhir">Pendidikan Terakhir:</label>
                </td>
                <td>
                    <input type="text" name="PendidikanTerakhir">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PosisiDilamar">Posisi Dilamar:</label>
                </td>
                <td>
                    <input type="text" name="PosisiDilamar" required>
                </td>
            </tr>
        </table>
        <center>

        <div class="tambah">
            <button  type="submit">Tambah</button>
        </div>
        </center>
        
    </form>
    <center>

    <div class="kembali">
        <a href="halaman.php">
        <button>    
            Kembali
        </button>    
        </a>
    </div>
    </center>
</body>
</html>
