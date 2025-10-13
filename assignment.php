<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kembali ke Dashboard</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Manajemen Tugas</h2>
        
        <!-- Form Tambah -->
        <form action="api_assignments.php" method="POST" class="mb-4 p-3 border rounded">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="judul" class="form-control" placeholder="Judul Tugas" required>
                </div>
                <div class="col-md-5">
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi Tugas"></textarea>
                </div>
                <div class="col-md-3">
                    <input type="date" name="tanggal_due" class="form-control" required>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-warning w-100">Tambah Tugas</button>
