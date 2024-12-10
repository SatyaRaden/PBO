<?php
require_once 'classes/Page.php';
require_once 'classes/Product.php';

$productModel = new Product();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $productModel->addProduct($name, $price, $description);
    }

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $productModel->deleteProduct($id);
    }
}

$page = new Page('Pencatatan Barang');
$page->renderHeader();
?>
<main class="container">
    <h2>Pencatatan Barang</h2>
    <form method="POST">
        <label for="name">Nama Barang:</label>
        <input type="text" id="name" name="name" required>
        <label for="price">Harga:</label>
        <input type="number" id="price" name="price" required>
        <label for="description">Deskripsi:</label>
        <input type="text" id="description" name="description" required>
        <button type="submit" name="add">Tambah Barang</button>
    </form>

    <h2>Hapus Barang</h2>
    <form method="POST">
        <label for="id">ID Barang:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit" name="delete">Hapus Barang</button>
    </form>
</main>
<?php
$page->renderFooter();
?>
