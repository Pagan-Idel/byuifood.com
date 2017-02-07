<!DOCTYPE html>
<html>

    <?php include '../view/header.php';?>
    
    <body>
        <header><h1>Product Manager</h1></header>

        <main  id="add_product_form">
            <h1>Edit Product</h1>
            <form action="." method="post" >
                <input type="hidden" name="action" value="update_product">
                <?php foreach ((array)$products as $product) { ?>

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