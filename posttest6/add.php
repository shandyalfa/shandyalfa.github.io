<?php
include 'db.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $noTelepon = $_POST['NoTelepon'];
    $alamat = $_POST['Alamat'];
    $pendidikanTerakhir = $_POST['PendidikanTerakhir'];
    $posisiDilamar = $_POST['PosisiDilamar'];

    // Mengambil informasi file gambar yang diupload
    $tmp_name = $_FILES['foto']['tmp_name'];
    $file_name = $_FILES['foto']['name'];
    
    // Ekstensi file yang diizinkan
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = explode('.', $file_name);
    $fileExtension = strtolower(end($fileExtension));

    // Validasi apakah file yang diupload adalah gambar
    if (!in_array($fileExtension, $validExtension)) {
        echo "<script>
                alert('File yang diupload bukan gambar!');
                document.location.href = 'halaman.php'; // Ubah ke halaman form yang sesuai
              </script>";
        exit;
    } else {
        // Buat nama file baru yang unik dengan format tanggal
        $newFileName = date('d-m-y') . '-' . $file_name;

        // Pindahkan file ke folder images
        if (move_uploaded_file($tmp_name, 'images/' . $newFileName)) {
            // Query untuk memasukkan data pendaftar ke database, termasuk nama file gambar
            $sql = "INSERT INTO calonpendaftar (Nama, Email, NoTelepon, Alamat, PendidikanTerakhir, PosisiDilamar, Foto) 
                    VALUES ('$nama', '$email', '$noTelepon', '$alamat', '$pendidikanTerakhir', '$posisiDilamar', '$newFileName')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                        alert('Pendaftar berhasil ditambahkan!');
                        document.location.href = 'index.php'; // Ubah ke halaman tujuan setelah berhasil
                      </script>";
                exit;
            } else {
                echo "<script>
                        alert('Gagal menambah pendaftar!');
                        document.location.href = 'index.php'; // Ubah ke halaman form yang sesuai
                      </script>";
            }
        } else {
            echo "<script>
                    alert('Gagal mengupload gambar!');
                    document.location.href = 'index.php'; // Ubah ke halaman form yang sesuai
                  </script>";
        }
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
    <h1>Pendaftaran Calon Karyawan</h1>
    <form method="POST" action="" enctype="multipart/form-data">
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
            <tr>
            <td><label for="foto">Upload Foto:</label></td>
            <td><input type="file" name="foto" accept=".jpg,.jpeg,.png" required></td>
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
                <a href="index.php">
                <button>    
                    Kembali
                </button>    
                </a>
            </div>
        </center>
</body>
</html>
