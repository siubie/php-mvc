<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h1>Edit Mahasiswa</h1>
    <form action="index.php?action=update&nim=<?= $mahasiswa['nim'] ?>" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" name="nim" value="<?= $mahasiswa['nim'] ?>" readonly><br><br>

        <label for="nama_lengkap">Nama Lengkap:</label><br>
        <input type="text" name="nama_lengkap" value="<?= $mahasiswa['nama_lengkap'] ?>" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea name="alamat" required><?= $mahasiswa['alamat'] ?></textarea><br><br>

        <label for="jurusan">Jurusan:</label><br>
        <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br><br>

        <label for="nomor_telepon">Nomor Telepon:</label><br>
        <input type="text" name="nomor_telepon" value="<?= $mahasiswa['nomor_telepon'] ?>" required><br><br>

        <input type="submit" value="Update">
    </form>
</body>

</html>