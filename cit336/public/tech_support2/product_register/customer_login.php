<?php if(!isset($_SESSION)){
    session_start();
} ?>
<?php include '../view/header.php'; ?>
<main>

    <h2>Customer Login</h2>
    <p>You must login before you can register a product.</p>
    <?php
    if (isset($message)) {
            echo $message;
    }
    ?>
    <!-- build a login form -->
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="Login">
        <label>Email:</label><br>
        <input type="text" name="email" placeholder="email"><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password"><br>
        <input type="submit" value="Login">
    </form>
</main>
<?php
include '../view/footer.php';
unset($message);
?>