<?php 
if (!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html>

    <!-- the head section -->
    <head>
        <title>SportsPro Technical Support</title>
        <link rel="stylesheet" type="text/css"
              href="/cit336/public/tech_support2/main.css">
    </head>

    <!-- the body section -->
    <body>
        <header>
            <h1>SportsPro Technical Support</h1>
            <p>Sports management software for the sports enthusiast</p>
            <img class="logo" src="/cit336/public/tech_support2/view/sports.png" alt="Logo">

            <nav>
                <a href="/cit336/public/tech_support2/index.php">Home</a>
                <?php if (isset($_SESSION['login'])): ?>
                <a href="/cit336/public/tech_support2/product_register?action=logout">Logout</a>
                <?php else: ?>
                <a href="/cit336/public/tech_support2/product_register?action=display_login">Login</a>
               
                <?php endif; ?>
                 
            </nav>


        </header>
