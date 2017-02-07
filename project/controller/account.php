<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Account | byuifood.com</title>
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
                    <h1>Welcome <?php echo htmlspecialchars($user['userName']); ?></h1> 
                    <h2>Your User Name: <?php echo htmlspecialchars($user['userName']); ?></h2>
                    <h2>Your Email: <?php echo htmlspecialchars($user['email']); ?></h2>
                    <h2>Your Account ID: <?php echo htmlspecialchars($user['id']); ?></h2>
                    <h3>You can now do the following:</h3>
                     <form action="index.php" method="post">
                        <input type="hidden" name="action" value="display_price">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                        <input type="submit" value="Edit Price Table">
                    </form>
                    <form action="index.php" method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?php echo htmlspecialchars($user['id']); ?>">
                        <input type="submit" value="Delete Account">
                    </form>
                </div>
            </main>
        </div>
        <aside role="complementary"> 
            <div>   

            </div>
        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; ?> 

            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    
    </body>
</html>