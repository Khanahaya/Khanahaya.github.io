<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_admin.css">
    <title>Tambah Produk</title>
</head>
<body>
    <h2>Tambah Produk Baru</h2>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <label>ID Brand:</label>
        <input type="number" name="id_brand" required><br><br>
        
        <label>Nama Produk:</label>
        <input type="text" name="nama_produk" required><br><br>
        
        <label>Harga Normal:</label>
        <input type="number" step="0.01" name="harga_normal" required><br><br>
        
        <label>Harga Diskon:</label>
        <input type="number" step="0.01" name="harga_diskon" required><br><br>
        
        <label>Stok:</label>
        <input type="number" name="stok" required><br><br>
        
        <label>Gambar Produk:</label>
        <input type="file" name="gambar_produk" required><br><br>
        
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
