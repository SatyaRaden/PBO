<?php
class Product {
    private $filePath = 'data/products.json';
    private $products = [];

    public function __construct() {
        $this->loadProducts();
    }

    private function loadProducts() {
        if (file_exists($this->filePath)) {
            $data = file_get_contents($this->filePath);
            $this->products = json_decode($data, true);
        }
    }

    private function saveProducts() {
        file_put_contents($this->filePath, json_encode($this->products, JSON_PRETTY_PRINT));
    }

    public function getAllProducts() {
        return $this->products;
    }

    public function addProduct($name, $price, $description) {
        $newProduct = [
            'id' => count($this->products) + 1,
            'name' => $name,
            'price' => $price,
            'description' => $description,
        ];
        $this->products[] = $newProduct;
        $this->saveProducts();
    }

    public function deleteProduct($id) {
        $this->products = array_filter($this->products, function ($product) use ($id) {
            return $product['id'] != $id;
        });
        $this->saveProducts();
    }
}
