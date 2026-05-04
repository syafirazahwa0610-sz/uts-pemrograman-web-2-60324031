<?php
require_once 'config/database.php';

// validasi id
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php?pesan=ID tidak ditemukan");
    exit;
}

$id = intval($_GET['id']);

// cek adanya data
$cek = $conn->prepare("SELECT id_kategori FROM kategori WHERE id_kategori = ?");
$cek->bind_param("i", $id);
$cek->execute();
$result = $cek->get_result();

if ($result->num_rows == 0) {
    header("Location: index.php?pesan=Data tidak ditemukan");
    exit;
}

// hapus data
$delete = $conn->prepare("DELETE FROM kategori WHERE id_kategori = ?");
$delete->bind_param("i", $id);
$delete->execute();

// cek apakah benar terhapus
if ($delete->affected_rows > 0) {
    header("Location: index.php?pesan=Data berhasil dihapus");
} else {
    header("Location: index.php?pesan=Gagal menghapus data");
}

exit;
?>