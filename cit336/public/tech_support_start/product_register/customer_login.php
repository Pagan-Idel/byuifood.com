<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <!-- Build a login form similar to the one shown in the exam directions -->
         
    <form action="index.php" method="post">
                <input type="hidden" name="action" value="get_mail">
                <label>Email: </label>
                <input type="text" name="email">
           
                <input type="submit" value="Login">
            </form>

</main>
<?php include '../view/footer.php'; 