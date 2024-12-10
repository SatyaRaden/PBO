<?php
require_once 'classes/Page.php';
require_once 'classes/Product.php';

$page = new Page('Barang Tersedia');
$page->renderHeader();

$productModel = new Product();
$products = $productModel->getAllProducts();
?>
<main>
    <h2>Daftar Barang Tersedia</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['description'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php
$page->renderFooter();
?>
