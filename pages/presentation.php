<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Presentation | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body id="prices">

        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main role="main"> 
            <h1>CIT 336 Video Walk-Through</h1>
          
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Acv3TFHWqjg" frameborder="0" allowfullscreen></iframe>
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
