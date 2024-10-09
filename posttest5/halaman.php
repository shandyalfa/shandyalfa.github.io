<?php
include 'db.php';
$sql = "SELECT * FROM CalonPendaftar";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/db.css">
    <title>Calon Pendaftar</title>
</head>
<body>
    <h1>Daftar Calon Pendaftar</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Nomor Telepon</th>
            <th>Alamat</th>
            <th>Pendidikan Terakhir</th>
            <th>Posisi Dilamar</th>
            <th>Aksi</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['Nama']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <td><?php echo $row['NoTelepon']; ?></td>
                    <td><?php echo $row['Alamat']; ?></td>
                    <td><?php echo $row['PendidikanTerakhir']; ?></td>
                    <td><?php echo $row['PosisiDilamar']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $row['ID']; ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr>
                <td colspan="8">Tidak ada data pendaftar.</td>
            </tr>
        <?php endif; ?>
    </table>
    <div class="tombol">

        <a href="index.php">
        <button>
            Kembali

        </button>
        </a>
        
        <a href="addAdmin.php">
        <button>
            Tambah
        </button>
        </a>
    </div>

</body>
</html>
