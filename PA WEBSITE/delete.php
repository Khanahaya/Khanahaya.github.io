<?php
require 'koneksi.php';
$id_produk = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_produk WHERE id_produk=$id_produk");
header("Location: index.php");
?>
