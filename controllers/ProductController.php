<?php

require_once 'models/Product.php';

class ProductController {
    private $model;

    public function __construct($db) {
        $this->model = new Product($db);
    }

    public function index() {
        $products = $this->model->getAll();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $this->model->delete($_POST['id']);
        header('Location: /');
        exit();
        }
        require 'views/products/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $this->model->create($name, $price, $description);
            header('Location: /');
            exit();
        }
        require 'views/products/create.php';
    }
    

    
}
?>
