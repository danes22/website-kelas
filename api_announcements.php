<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $judul = $_POST['judul'] ?? '';
    $isi = $_POST['isi'] ?? '';
    $tanggal = $_POST['tanggal'] ?? date('Y-m-d');
    if (!empty($judul) && !empty($isi)) {
        $stmt = $pdo->prepare("INSERT INTO announcements (judul, isi, tanggal) VALUES (?, ?, ?)");
        $stmt->execute([$judul, $isi, $tanggal]);
        header('Location: announcements.php?success=1');
        exit;
    }
}
header('Location: announcements.php?error=Data tidak lengkap');
?>
