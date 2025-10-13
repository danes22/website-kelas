New Chat
74 lines

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Kelas Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Kelas Online PHP</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="students.php">Daftar Siswa</a></li>
                <li class="nav-item"><a class="nav-link" href="announcements.php">Pengumuman</a></li>
                <li class="nav-item"><a class="nav-link" href="assignments.php">Tugas</a></li>
                <li class="nav-item"><a class="nav-link" href="chat.php">AI Assistant</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        <h1>Selamat Datang di Dashboard Kelas!</h1>
        <p>Platform sederhana untuk manage siswa, pengumuman, tugas, dan AI tutor.</p>
        
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5>Siswa</h5>
