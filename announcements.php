New Chat
55 lines

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pengumuman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kembali ke Dashboard</a>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Pengumuman Kelas</h2>
        
        <!-- Form Tambah -->
        <form action="api_announcements.php" method="POST" class="mb-4 p-3 border rounded">
            <div class="row">
                <div class="col-md-3">
                    <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                </div>
                <div class="col-md-6">
                    <textarea name="isi" class="form-control" rows="3" placeholder="Isi Pengumuman" required></textarea>
                </div>
                <div class="col-md-2">
                    <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-primary w-100">Tambah</button>
