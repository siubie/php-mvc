<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="index.php?action=store" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>

        <label for="nomor_telepon">Nomor Telepon:</label><br>
        <input type="text" name="nomor_telepon" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>

</html>