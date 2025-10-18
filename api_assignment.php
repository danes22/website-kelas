<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'] ?? '';
    $deskripsi = $_POST['deskripsi'] ?? '';
    $tanggal_due = $_POST['tanggal_due'] ?? '';
    if (!empty($judul) && !empty($tanggal_due)) {
        $stmt = $pdo->prepare("INSERT INTO assignments (judul, deskripsi, tanggal_due) VALUES (?, ?, ?)");
        $stmt->execute([$judul, $deskripsi, $tanggal_due]);
        header('Location: assignments.php?success=1');
        exit;
    }
}
header('Location: assignments.php?error=Data tidak lengkap');
?>
