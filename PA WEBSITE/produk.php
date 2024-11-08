<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Produk</title>
    <link rel="stylesheet" href="produk.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="src/app.js"></script>

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bodi">
    <nav class="navi">
        <div>
            <img class="burung" src="gambar_logo/image (1).png" alt="my logo">
            <div class="teks-logo">
                <p>Amancio</p>
                <p>Ortega</p>

            </div>
        </div>
        <div id="menu-icon-1" class="menu-icon-1"><i class="ph ph-list"></i></div>

        <ul id="menu-list-1" class="hidden-1">
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="produk.php">Product</a>
            </li>
            <li>
                <a href="about_me.php">About Me</a>
            </li>
            <li>
                <a href id="cart-button"><i class="fa-solid fa-cart-plus"></i></a>
            </li>
            <!-- <li>
                <button id="dark-light-mode">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z"/></svg>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z"/></svg>
                </button>
              
            </li> -->
        </ul>

        <!-- CART -->
        <div class="shopping-cart" id="shopping-cart">
            <!-- <div class="cart-item">
                    <img src="seiko/1.png" alt>
                    <div class="item-detail">
                        <h3>Produk 1</h3>
                        <div class="item-price">Rp.6.785.000</div>
                    </div>
                    <i class="fa-solid fa-trash-can"></i>
                </div> -->

        </div>

    </nav>
    <div>
        <video class="video-1" autoplay loop muted>
            <source src="video/video1.mp4">
        </video>
    </div>

    <!-- Seiko -->
    <div class="seiko-brand">
        <a class="seiko-brand-1" href="#">Seiko </a>
        <img src="seiko/seiko.png" class="logo-brand">
    </div>
    <div class="garis-1"></div>

    <div class="penjualan">
        <!-- 1 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td onclick="Produk1()" class="produk-1" id="seiko-bg-1">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="seiko-produk-item-1">
                    Seiko Series Automatic GMT Blue Dial Stainless steel
                    strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="seiko-produk-harga-1">
                    Rp.5.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.7.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 2 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-2" id="seiko-bg-2" onclick="Produk2()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="seiko-produk-item-2">
                    Seiko Series Automatic GMT Black Dial Stainless steel
                    strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="seiko-produk-harga-2">
                    Rp.5.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.7.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 3 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-3" id="seiko-bg-3" onclick="Produk3()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="seiko-produk-item-3">
                    Seiko Series Automatic GMT Orange Dial steel
                    strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="seiko-produk-harga-3">
                    Rp.5.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.7.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 4 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-4" id="seiko-bg-4" onclick="Produk4()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="seiko-produk-item-4">
                    Seiko Series Automatic GMT Blue Dial Stainless steel
                    strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="seiko-produk-harga-4">
                    Rp.5.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.7.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 5 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-5" id="seiko-bg-5" onclick="Produk5()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="seiko-produk-item-5">
                    Seiko Series Automatic GMT Green Dial Stainless steel
                    strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="seiko-produk-harga-5">
                    Rp.5.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.7.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- Fossil -->
    <div class="seiko-brand">
        <a class="seiko-brand-1" href="#">Fossil </a>
        <img src="fossil/logo.png" class="logo-brand-fossil">
    </div>
    <div class="garis-1"></div>

    <div class="penjualan">
        <!-- 1 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-6" id="fossil-bg-1" onclick="Produk6()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="fossil-produk-item-1">
                    Fossil Riley Es320 Gold Dial Gold Color Stainless Steel
                    Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="fossil-produk-harga-1">
                    Rp.2.070.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.3.185.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 2 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-7" id="fossil-bg-2" onclick="Produk7()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" ID="fossil-produk-item-2">
                    Fossil Riley Es320 Silver Dial Silver Color Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="fossil-produk-harga-2">
                    Rp.1.933.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.2.975.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 3 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-8" id="fossil-bg-3" onclick="Produk8()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="fossil-produk-item-3">
                    Fossil Riley Es320 Gold Dial Gold Color Stainless Steel
                    Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="fossil-produk-harga-3">
                    Rp.2.661.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.4.095.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 4 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-9" id="fossil-bg-4" onclick="Produk9()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="fossil-produk-item-4">
                    Fossil Riley Es320 Sand Dial Bone Leather
                    Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="fossil-produk-harga-4">
                    Rp.1.910.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.3.185.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 5 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-10" id="fossil-bg-5" onclick="Produk10()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="fossil-produk-item-5">
                    Fossil Riley Es320 White Dial White Color
                    Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="fossil-produk-harga-5">
                    Rp.1.933.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.3.185.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <!-- cartier -->

    <div class="seiko-brand">
        <a class="seiko-brand-1" href="#">Cartier </a>
        <img src="cartier/logo.png" class="logo-brand">
    </div>
    <div class="garis-1"></div>

    <div class="penjualan-cartier">
        <!-- 1 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-11" id="car-bg-1" onclick="Produk11()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="cartier-produk-item-1">
                    Cartier Santos de Cartier WSSA0030 Men Blue Dial
                    Stainless Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="cartier-produk-harga-1">
                    Rp.99.500.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.100.185.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 2 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-12" id="car-bg-2" onclick="Produk12()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="cartier-produk-item-2">
                    Cartier Tank Musk de Cartier WSTA0052 Ladies Silver Dial
                    Stainless Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="cartier-produk-harga-2">
                    Rp.67.000.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.70.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 3 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-13" id="car-bg-3" onclick="Produk13()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="cartier-produk-item-3">
                    Cartier Santos de Cartier WSSA0029 Men Silver Opaline
                    Dial Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="cartier-produk-harga-3">
                    Rp.111.500.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.112.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 4 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-14" id="car-bg-4" onclick="Produk14()">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="cartier-produk-item-4">
                    Cartier Tank Musk de Cartier WSTA0052 Ladies Silver Dial
                    Stainless Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="cartier-produk-harga-4">
                    Rp.61.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.62.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <!-- 5 -->
        <table class="tabel-produk-1">
            <tr>
                <td>
                    <div class="lingkaran-utama">
                        <div class="lingkaran-1"></div>
                        <!-- <div class="lingkaran-2"><i
                                    class="fa-regular fa-heart"></i></div> -->
                    </div>
                    <table class="tabel-seiko-1">
                        <tr>
                            <td class="produk-15" id="car-bg-5" onclick="HargaAwal2(315695000)">

                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr>
                <td class="keterangan-1" id="cartier-produk-item-5">
                    Cartier Santos de Cartier WHSA0015 Men Skeleton Dial
                    Stainless Steel Strap
                </td>
            </tr>
            <tr>
                <td class="keterangan-harga" id="cartier-produk-harga-5">
                    Rp.315.695.000
                </td>

            </tr>
            <tr>
                <td class="keterangan-discount">
                    Rp.317.695.000
                </td>

            </tr>
            <tr>
                <td>
                    <div class="icons-produk">
                        <div class="keterangan-1">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="keteranga-2-1">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <footer class="footer-mom">
        <div class="footer-content">
            <div>
                <ul>
                    <li class="us">
                        <b>Contack Us</b>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-envelope"></i>Email:2109106086@student.unmul.ac.id</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-phone"></i>Phone:+6285346157684</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-user"></i>Developer Name:
                            Iswan</a>
                    </li>
                    <li>
                        <a href="https://maps.app.goo.gl/wkthsssDAVD9dLyv8" target="_blank"><i
                                class="fa-solid fa-location-dot"></i>Address:5
                            East 68th street,New York,NY 10065</a>
                    </li>

                </ul>
            </div>
            <div>
                <ul>
                    <li class="links"><b>Quick Links</b></li>
                    <li class="home">
                        <a href="#"><i class="fa-solid fa-house"></i>Home</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-cart-shopping"></i>Product</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-user"></i>About
                            Me</a>
                    </li>
                </ul>
            </div>
            <div>
                <ul>
                    <li class="follow"><b>Follow Us</b></li>
                    <div class="icon">
                        <li class="icon-instagram">
                            <a href="https://www.instagram.com/rolex?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                                target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li class="icon-facebook">
                            <a href="https://web.facebook.com/Fossil.ID" target="_blank"><i
                                    class="fa-brands fa-square-facebook"></i></a>
                        </li>
                        <li class="icon-twitter">
                            <a href="https://www.tiktok.com/@seikoid?is_from_webapp=1&sender_device=pc"
                                target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        </li>
                        <li class="icon-github">
                            <a href="https://github.com/iswan9993" target="_blank"><i
                                    class="fa-brands fa-square-github"></i></a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Amancio Ortega.All rights reserved</p>
        </div>
    </footer>
    <!-- Item Detail -->

    <div class="kelas-detail" id="kelas-detail">
        <div class="detail-kontainer">
            <a href="#"><i class="fa-solid fa-xmark"></i></a>
            <div class="detail-kontent">
                <img src="seiko/1.png" alt="product 1">
                <div class="produk-kontent">

                    <p class="detail-teks" id="keterangan-detail"><b>Tidak
                            ada keterangan</b></p>
                    <p class="detail-harga" name="harga-awal" id="harga-detail"><b>Rp.000.000.000</b></p>
                    <div class="keterangan-99">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>

                </div>

            </div>
            <div class="jumlah-beli">
                <button class="tombol-kiri" onclick="decrease()">-</button>
                <input name="" class="tabel-tampilan" type="number" id="rangeInput" value="1" min="1" max="100" step="1"
                    readonly>
                <button class="tombol-kanan" onclick="increase()">+</button>
            </div>
            <div class="posisi-kelas">
                <p class="kelas-harga-akhir">Total Harga:</p>
                <p class="total-harga-akhir" name="harga-total" id="total-harga">Rp.000.000.000</p>
            </div>
            <div class="tombol-beli">
                <button name="tambah" id="tombol-beli" class="tombolnya"
                    onclick="simpanHarga();simpanJumlah();simpanTotalHarga(); window.location.href='struk.php';">Beli</button>
            </div>
        </div>
    </div>
    <!-- <div class="kelas-detail1" id="kelas-detail">
            <div class="detail-kontainer1">
                <a href="#"><i class="fa-solid fa-xmark"></i></a>
                <div class="detail-kontent1">
                    
                    <div class="produk-kontent1">
                        <p class="ucapan-terimakasih">TERIMA KASIH!!!!</p>
                        <p class="detail-teks" id="keterangan-detail"><b>Anda Telah Menbeli:</b></p>
                        <table border="1" class="tabel-akhir">
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
                                <td>
                                    Nama Barang
                                </td>
                                <td>
                                    jumlah Barang
                                </td>
                                <td>
                                    harga Barang
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">Total:<span>Harga</span></td>
                            </tr>
                        </table>
                        
                        

                    </div>
                </div>
            </div>
        </div> -->

    <!-- Item Detail end -->

    <script src="produk.js"></script>

</body>

</html>