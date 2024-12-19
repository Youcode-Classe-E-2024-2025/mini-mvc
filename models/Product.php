<?php

class Product {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($name, $price, $description) {
        $this->db->query("INSERT INTO products (name, price, description) VALUES (?, ?, ?)",[$name, $price, $description]);
    }

    public function delete($id) {
        $this->db->query("DELETE FROM products WHERE id = ?",[$id]);
    }
}
?>
