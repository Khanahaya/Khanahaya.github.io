// Ambil data dari localStorage
const hargaProduk = localStorage.getItem("hargaProduk");
// Tampilkan di elemen dengan id harga-produk
if (hargaProduk) {
  document.getElementById("harga-produk").textContent = hargaProduk;
}
// Ambil data dari localStorage

document.addEventListener("DOMContentLoaded", function () {
  const jumlahBeli = localStorage.getItem("jumlahBeli");
  document.getElementById("jumlah-beli").innerText = jumlahBeli;
});

window.onload = function() {
    // Ambil nilai dari localStorage
    const totalHargaStruk = localStorage.getItem("totalHargaStruk");

    // Masukkan nilai total-harga ke elemen dengan id total-harga-struk
    if (totalHargaStruk) {
        document.getElementById("total-harga-struk").innerText = totalHargaStruk;
    } else {
        document.getElementById("total-harga-struk").innerText = "Rp.000.000.000";
    }
}