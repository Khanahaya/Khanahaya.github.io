<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produk = $_POST['id_produk'];
    $id_brand = $_POST['id_brand'];
    $nama_produk = $_POST['nama_produk'];
    $harga_normal = $_POST['harga_normal'];
    $harga_diskon = $_POST['harga_diskon'];
    $stok = $_POST['stok'];
    
    // Jika ada gambar baru, upload
    if ($_FILES['gambar_produk']['name']) {
        $gambar_produk = $_FILES['gambar_produk']['name'];
        $target = "uploads/" . basename($gambar_produk);
        move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $target);
        $sql = "UPDATE tb_produk SET id_brand='$id_brand', nama_produk='$nama_produk', harga_normal='$harga_normal', 
                harga_diskon='$harga_diskon', stok='$stok', gambar_produk='$gambar_produk' WHERE id_produk=$id_produk";
    } else {
        $sql = "UPDATE tb_produk SET id_brand='$id_brand', nama_produk='$nama_produk', harga_normal='$harga_normal', 
                harga_diskon='$harga_diskon', stok='$stok' WHERE id_produk=$id_produk";
    }
    
    mysqli_query($conn, $sql);
    header("Location: index.php");
}
?>
