<?php
require_once('database.php');

// Get product ID

$product_id = filter_input(INPUT_POST, 'productID');

// Get products for selected category
$queryProducts = 'SELECT *
                  FROM products
                  WHERE productID = :productID';

$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':productID', $product_id);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();


//echo '<pre>'. print_r($product_id, true) . '<pre>';
?>

<!DOCTYPE html>
<html>

    <!-- the head section -->
    <head>
        <title>My Guitar Shop</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <!-- the body section -->
    <body>
        <header><h1>Product Manager</h1></header>

        <main  id="add_product_form">
            <h1>Edit Product</h1>
            <form action="edit_product.php" method="post">
                <?php foreach ($products as $product) { ?>

                    <label>Category ID:</label>
                    <input type="text" name="categoryID" value="<?php echo $product['categoryID']; ?>" readonly><br>

                    <label>Code:</label>
                    <input type="text" name="code" value="<?php echo $product['productCode']; ?>"><br>

                    <label>Name:</label>
                    <input type="text" name="name" value="<?php echo $product['productName']; ?>"><br>

                    <label>List Price:</label>
                    <input type="text" name="price" value="<?php echo $product['listPrice']; ?>"><br>
                    <input type="hidden" name="productID" value="<?php echo $product['productID']; ?>"><br>

                <?php } ?>

                <label>&nbsp;</label>
                <input type="submit" value="Save Changes"><br>

            </form>
            <p><a href="index.php">View Product List</a></p>
        </main>

        <footer>
            <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
        </footer>
    </body>
</html>