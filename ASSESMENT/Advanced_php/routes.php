<?php
//	Step 6: Routes (routes.php):

require_once 'app/controllers/ProductController.php';

$productController = new ProductController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $productController->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['stock']);
}
?>
