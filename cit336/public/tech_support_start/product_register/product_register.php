<?php include '../view/header.php'; ?>
<main>

    <h2>Register Product</h2>

    <label>Customer:</label>
    <?php foreach ($names as $name) : ?>




        <?php echo $name['firstName']; ?>
        <?php echo $name['lastName']; ?>


    <?php endforeach; ?>
    <br>
    <label>Product:</label>
    <form action="." method="post">
        <input type="hidden" name="action" value="reg_product">
        <select name="product_code" >
            <?php
            $pnames = get_Products();
            foreach ($pnames as $pname) :
                ?>
            <option value="<?php echo $pname['productCode']; ?>">
                    <?php echo $pname['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <?php foreach ($names as $name) : ?>
            <input type="hidden" name="customer_id" value="<?php echo $name['customerID']; ?>">
        <?php endforeach; ?>
        <?php foreach ($pnames as $pname) : ?>
           
        <?php endforeach; ?>

        <br><input type="submit" value="Register Product">
    </form>

</main>
<?php include '../view/footer.php'; 