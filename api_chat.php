<?php
include 'config.php';  // Opsional, kalau mau query DB untuk konteks
header('Content-Type: text/plain');  // Output teks polos untuk JS
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Method tidak diizinkan.";
    exit;
}
$pesan = $_POST['pesan'] ?? '';
if (empty($pesan)) {
    echo "Pesan kosong!";
    exit;
}
// Opsional: Tambah konteks dari DB (misalnya pengumuman terbaru)
$konteks = "";
try {
    $stmt = $pdo->query("SELECT judul, isi FROM announcements ORDER BY tanggal DESC LIMIT 1");
    if ($row = $stmt->fetch()) {
        $konteks = "Pengumuman terbaru: {$row['judul']} - {$row['isi']}. ";
    }
} catch (PDOException $e) {
    // Kalau DB error, skip konteks
}
// API Gemini
$apiKey = 'YOUR_API_KEY';  // GANTI DENGAN API KEY GEMINI-MU!
$url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key=' . $apiKey;
