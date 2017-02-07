<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Reviews | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>

        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main role="main"> 
            <div>
                <h1> Welcome to </h1>
                Tuscan Valley! Below are the available reviews for this spot.                
            </div>
            <div id="homelinks2">
                <a class="ar" href="/pages/reviews/calzone.php"><span>Calzone</span></a>
                <a class="ar" href="/pages/reviews/pastabowl.php"><span>Pasta Bowl</span></a>
            </div>
        </main>
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
