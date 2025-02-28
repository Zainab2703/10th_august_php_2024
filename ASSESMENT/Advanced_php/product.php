<?php

//Step 4: Product Model (app/models/Product.php):


require_once 'config/database.php';

class Product {
    private $conn;
    private $table = "products";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function addProduct($name, $description, $price, $stock) {
        $stmt = $this->conn->prepare("INSERT INTO " . $this->table . " (name, description, price, stock) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$name, $description, $price, $stock]);
    }

    public function getAllProducts() {
        $stmt = $this->conn->prepare("SELECT * FROM " . $this->table);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
