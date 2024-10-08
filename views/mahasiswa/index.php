<!DOCTYPE html>
<html>

<head>
    <title></title>

<body>
    <h1>List Data Page</h1>
    <ul>
        <?php foreach ($mahasiswas as $mahasiswa): ?>
            <li><?php echo "Nama Lengkap " . htmlspecialchars($mahasiswa['nama_lengkap']) . ", Alamat: " . htmlspecialchars($mahasiswa['alamat']); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</head>

</html>