<!DOCTYPE html>
<html lang="en">
	<!--Step 7: Frontend Forms (views/manage_products.php)-->

<html lang="en">
<head>
    <title>Manage Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Manage Products</h2>
        <form method="POST" action="../routes.php">
            <input type="hidden" name="add_product">
            <div class="mb-3">
                <label>Product Name:</label>
                <input type="text" name="name" required class="form-control">
            </div>
            <div class="mb-3">
                <label>Description:</label>
                <input type="text" name="description" required class="form-control">
            </div>
            <div class="mb-3">
                <label>Price:</label>
                <input type="number" name="price" required class="form-control">
            </div>
            <div class="mb-3">
                <label>Stock:</label>
                <input type="number" name="stock" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
