<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM CalonPendaftar WHERE ID = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $noTelepon = $_POST['NoTelepon'];
    $alamat = $_POST['Alamat'];
    $pendidikanTerakhir = $_POST['PendidikanTerakhir'];
    $posisiDilamar = $_POST['PosisiDilamar'];

    $sql = "UPDATE CalonPendaftar SET 
            Nama='$nama', 
            Email='$email', 
            NoTelepon='$noTelepon', 
            Alamat='$alamat', 
            PendidikanTerakhir='$pendidikanTerakhir', 
            PosisiDilamar='$posisiDilamar' 
            WHERE ID=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Pendaftar berhasil diubah!";
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
    <title>Edit Calon Pendaftar</title>
</head>
<body>
    <h1>Edit Calon Pendaftar</h1>
    <form method="POST" action="">
    <table>
            <tr>
                <td>
                    <label for="Nama">Nama:</label>
                </td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $row['Nama']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Email">Email:</label>
                </td>
                <td>
                    <input type="email" name="Email"  value="<?php echo $row['Email']; ?>" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="NoTelepon">No Telepon:</label>
                </td>
                <td>
                    <input type="text" name="NoTelepon"  value="<?php echo $row['NoTelepon']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Alamat">Alamat:</label>

                </td>
                <td>
                    <textarea name="Alamat" <?php echo $row['Alamat']; ?>></textarea>

                </td>
            </tr>
            <tr>
                <td>
                    <label for="PendidikanTerakhir">Pendidikan Terakhir:</label>
                </td>
                <td>
                    <input type="text" name="PendidikanTerakhir" value="<?php echo $row['PendidikanTerakhir']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="PosisiDilamar">Posisi Dilamar:</label>
                </td>
                <td>
                    <input type="text" name="PosisiDilamar"  value="<?php echo $row['PosisiDilamar']; ?>" required>
                </td>
            </tr>
        </table>
        <center>
        <div class="tambah">
            <button  type="submit">Ubah</button>
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
