<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_brand = $_POST['id_brand'];
    $nama_produk = $_POST['nama_produk'];
    $harga_normal = $_POST['harga_normal'];
    $harga_diskon = $_POST['harga_diskon'];
    $stok = $_POST['stok'];
    
    // Upload gambar produk
    $gambar_produk = $_FILES['gambar_produk']['name'];
    $target = "uploads/" . basename($gambar_produk);
    move_uploaded_file($_FILES['gambar_produk']['tmp_name'], $target);
    
    $sql = "INSERT INTO tb_produk (id_brand, nama_produk, harga_normal, harga_diskon, stok, gambar_produk) 
            VALUES ('$id_brand', '$nama_produk', '$harga_normal', '$harga_diskon', '$stok', '$gambar_produk')";
    mysqli_query($conn, $sql);
    header("Location: index_admin.php");
}
?>
