<?php
require 'koneksi.php';
$id_produk = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM tb_produk WHERE id_produk=$id_produk");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <title>Edit Produk</title>
</head>
<body>
    <h2>Edit Produk</h2>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_produk" value="<?= $row['id_produk']; ?>">
        
        <label>ID Brand:</label>
        <input type="number" name="id_brand" value="<?= $row['id_brand']; ?>" required><br><br>
        
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" value="<?= $row['nama_produk']; ?>" required><br><br>
        
        <label>Harga Normal:</label>
        <input type="number" step="0.01" name="harga_normal" value="<?= $row['harga_normal']; ?>" required><br><br>
        
        <label>Harga Diskon:</label>
        <input type="number" step="0.01" name="harga_diskon" value="<?= $row['harga_diskon']; ?>" required><br><br>
        
        <label>Stok:</label>
        <input type="number" name="stok" value="<?= $row['stok']; ?>" required><br><br>
        
        <label>Gambar Produk:</label>
        <input type="file" name="gambar_produk"><br><br>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>
