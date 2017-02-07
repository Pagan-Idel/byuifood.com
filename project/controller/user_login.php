<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Login | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body role="application">
        <div>   

            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>
                    <h1>User Login</h1>

                    <?php
                    if (isset($message)) {
                        echo $message;
                    }
                    ?>
                    <!-- build a login form -->
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="login">
                        <h2>Email:</h2>
                        <input type="email" name="email" placeholder="email" required=""><br>
                        <h2>Password:</h2>
                        <input type="password" name="password" placeholder="password" required=""><br>
                        <input type="submit" value="Login">
                    </form>
         
                    <div id="homelinks">
                        <a class="ar2" href="/project/controller/create_account.php"><span>Don't have an account?<br>Create One!</span> </a>
                    </div>
                </div>
            </main>
        </div>
        <aside role="complementary"> 
            <div>   

            </div>
        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php
                include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php';
                unset($message);
                ?> 

            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>

        </footer>    
    </body>
</html>