<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Produk</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <h2>Daftar Produk</h2>
    <a href="create.php">Tambah Produk Baru</a>
    <table border="1" cellpadding="10" cellspacing="0">
    <form action="logout.php" method="POST"><br>
        <button aligntype="submit" name="logout">Logout</button>
        </form>
        <tr>
            <th>ID Produk</th>
            <th>ID Brand</th>
            <th>Nama Produk</th>
            <th>Harga Normal</th>
            <th>Harga Diskon</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        require 'koneksi.php';
        $result = mysqli_query($conn, "SELECT * FROM tb_produk");
        while($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?= $row['id_produk']; ?></td>
            <td><?= $row['id_brand']; ?></td>
            <td><?= $row['nama_produk']; ?></td>
            <td><?= $row['harga_normal']; ?></td>
            <td><?= $row['harga_diskon']; ?></td>
            <td><?= $row['stok']; ?></td>
            <td><img src="uploads/<?= $row['gambar_produk']; ?>" width="100"></td>
            <td>
                <a href="edit.php?id=<?= $row['id_produk']; ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id_produk']; ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
