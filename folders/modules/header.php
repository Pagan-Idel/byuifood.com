<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<img  src="/folders/images/thisisthelogo.jpg" alt="logo" class="logo">


<nav id="nav">    



    <?php if (isset($_SESSION['login'])): ?>
        <a class="nav" href="/index.php" title="home">Home</a>
        <a class="nav" href="/project/controller?action=display_price" title="prices">Prices</a>
        <a class="nav" href="/pages/contact.php" title="contact">Contact</a>
        <a class="nav" href="/pages/feedback.php" title="feedback">Feedback</a>
        <a class="nav" href="/project/controller?action=logout">Logout</a>
        <a class="nav" href="/project/controller/account.php">Account</a>
    <?php else: ?>
        <a class="nav" href="/index.php" title="home">Home</a>
        <a class="nav" href="/project/controller?action=display_price" title="prices">Prices</a>
        <a class="nav" href="/pages/contact.php" title="contact">Contact</a>
        <a class="nav" href="/pages/feedback.php" title="feedback">Feedback</a>
        <a class="nav" href="/project/controller?action=display_login">Login</a>
        <a class="nav" href="/project/controller/create_account.php">Sign Up</a>
    <?php endif; ?>
    <a href="header.php"></a>
    <a href="header.php"></a>

</nav>


