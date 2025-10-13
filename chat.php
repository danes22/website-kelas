New

Share





New Chat
93 lines

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>AI Assistant - Kelas PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #chatBox { background-color: #f8f9fa; }
        .user-msg { text-align: right; color: blue; }
        .ai-msg { text-align: left; color: green; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">Kembali ke Dashboard</a>
            <span class="navbar-text ms-auto">AI Tutor Gemini untuk Bantu Murid</span>
        </div>
    </nav>
    <div class="container mt-4">
        <h2>Chat dengan AI Assistant</h2>
        <p>Tanya apa saja soal PHP, tugas, pengumuman, atau materi kelas. AI akan jawab dalam bahasa Indonesia!</p>
        
        <div id="chatBox" class="border p-3 mb-3 rounded" style="height: 400px; overflow-y: scroll; background-color: #f8f9fa;">
            <div class="text-center text-muted">Mulai chat dengan mengetik pesan di bawah...</div>
        </div>
        
        <div class="input-group">
            <input type="text" id="pesanInput" class="form-control" placeholder="Ketik pertanyaanmu di sini... (misalnya: 'Jelasin tugas PHP')">
            <button class="btn btn-primary" onclick="kirimPesan()">Kirim</button>
        </div>
