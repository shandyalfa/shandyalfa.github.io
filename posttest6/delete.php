<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM CalonPendaftar WHERE ID = $id";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftar berhasil dihapus!";
    header("Location: halaman.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
