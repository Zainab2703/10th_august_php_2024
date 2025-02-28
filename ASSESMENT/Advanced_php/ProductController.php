<?php
	//Step 5: Product Controller (app/controllers/ProductController.php)

require_once 'app/models/Product.php';

class ProductController {
    private $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function addProduct($name, $description, $price, $stock) {
        if ($this->product->addProduct($name, $description, $price, $stock)) {
            echo "Product added successfully!";
        } else {
            echo "Failed to add product.";
        }
    }

    public function viewProducts() {
        return $this->product->getAllProducts();
    }
}
?>


