<?php
require_once 'classes/Page.php';

$page = new Page('Homepage');
$page->renderHeader();
?>
<main class="container">
    <!-- Hero Section -->
    <section class="hero">
        <h2>Selamat Datang di Marketplace Kami</h2>
        <p>Temukan produk terbaik dengan penawaran menarik setiap hari!</p>
        <a href="available.php" class="btn-primary">Belanja Sekarang</a>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <h2>Produk Unggulan</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="asset/kameja.jpeg" alt="Kameja-Putih">
                <h3>Kameja Putih</h3>
                <p>Rp 129.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
            <div class="product-card">
                <img src="asset/canon.jpeg" alt="canon">
                <h3>Canon Mirrorless</h3>
                <p>Rp 4.299.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
            <div class="product-card">
                <img src="asset/keychain.jpeg" alt="Keychain">
                <h3>Keychain Telecuster</h3>
                <p>Rp 49.000</p>
                <button class="btn-secondary">Tambahkan ke Keranjang</button>
            </div>
        </div>
    </section>

    <!-- Promotional Banner -->
    <section class="promo-banner">
        <h2>Promo Spesial Hari Ini!</h2>
        <p>Diskon hingga 50% untuk produk tertentu. Jangan lewatkan kesempatan ini!</p>
        <a href="available.php" class="btn-primary">Lihat Promo</a>
    </section>

    <!-- Category Section -->
    <section class="categories">
        <h2>Belanja Berdasarkan Kategori</h2>
        <div class="category-grid">
            <div class="category-item">
                <img src="asset/catekameja.jpeg" alt="Kategori T-Shirt">
                <h3>T-Shirt</h3>
            </div>
            <div class="category-item">
                <img src="asset/cateaksesoris.jpeg" alt="Kategori Aksesori">
                <h3>Aksesoris</h3>
            </div>
            <div class="category-item">
                <img src="asset/catemh.jpeg" alt="Kategori Paket">
                <h3>Paket Merchandise</h3>
            </div>
        </div>
    </section>
</main>
<?php
$page->renderFooter();
?>
