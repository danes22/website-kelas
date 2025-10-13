                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-success w-100">Tambah Siswa</button>
                </div>
            </div>
        </form>
        <!-- List Siswa -->
        <h4>Siswa Terdaftar</h4>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr><th>ID</th><th>Nama</th><th>Email</th><th>Tanggal Daftar</th></tr>
            </thead>
            <tbody>
                <?php
                $stmt = $pdo->query("SELECT * FROM students ORDER BY tanggal_daftar DESC");
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nama']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['tanggal_daftar']}</td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
        <?php if (isset($_GET['success'])) echo '<div class="alert alert-success">Siswa berhasil ditambah!</div>'; ?>
    </div>
</body>
</html>
