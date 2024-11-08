<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <link rel="stylesheet" href="struk.css">
</head>

<body>
    <!-- <div>
            <div class="tabel-teks-1">
                <p class="teks-1">Terima Kasih!!!</p>
            </div>
            <div class="tabel-struk">
                <table border="1">
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Jumlah Barang
                        </th>
                        <th>
                            Harga Barang
                        </th>
                    </tr>
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <th>
                            Jumlah Barang
                        </th>
                        <th>
                            Harga Barang
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            Total: <span>Harga</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div> -->

    <div class="struk-pembelian">
        <h2>Struk Pembelian</h2>
        <p>Toko Jam Seiko</p>
        <hr>

        <!-- Informasi Produk -->
        <div class="detail-produk">
            <p>Nama Produk: <span id="nama-produk">Jam Tangan</span></p>
            <p>Harga Satuan: <span id="harga-produk">Rp.000.000</span></p>
            <p>Jumlah Beli: <span id="jumlah-beli">1</span></p>
            <p>Total Harga: <span id="total-harga-struk">Rp.000.000</span></p>
        </div>

        <hr>
        <p>Terima kasih atas pembelian Anda!</p>

        <button class="kembali-belanja" onclick="window.location.href='produk.php'">Kembali</button>
    </div>

</body>
<script src="struk.js"></script>

</html>