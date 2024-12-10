<?php
class Page {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function renderHeader() {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>{$this->title}</title>
            <link rel='stylesheet' href='styles.css'>
        </head>
        <body>
        <header>
            <h1>{$this->title}</h1>
            <nav>
                <a href='index.php'>Home</a>
                <a href='available.php'>Barang Tersedia</a>
                <a href='manage.php'>Pencatatan Barang</a>
            </nav>
        </header>";
    }

    public function renderFooter() {
        echo "</body>
        </html>";
    }
}
