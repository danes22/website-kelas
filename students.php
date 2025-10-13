New Chat
58 lines

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kembali ke Dashboard</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Daftar Siswa</h2>
        
        <!-- Form Tambah Siswa -->
        <form action="api_students.php" method="POST" class="mb-4 p-3 border rounded">
            <div class="row">
                <div class="col-md-5">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="col-md-5">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success w-100">Tambah Siswa</button>
                </div>
            </div>
        </form>
