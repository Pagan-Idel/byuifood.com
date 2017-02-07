<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Cheesecake | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>
        <main>
            <h2>Crepe Corner</h2>
            <h3>Strawberry Cheesecake</h3>

            <p>
                The cheesecake looked amazing. It had a nice and elegant presentation.
                Digging in, I noticed that there was a top layer that was harder than
                the center of the cheesecake.  The center was soft and almost like whip
                cream texture. The strawberries and its syrup did taste good, cannot 
                complain about that. But the cheesecake its self was not very tasty 
                and had a cheap/fake flavor. Nevertheless, it is cheesecake and it 
                will always have a good flavor even if it tastes fake. It cost a total
                of 2.19, just a little too expensive considering the flavor it gave. 
            </p>
            <div id="cheesecakepic">
                <img class="ch" src="/folders/images/food/139.jpg" alt="Cheesecake">   
            </div>
        </main>
        <footer>
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; ?> 
            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>

    </body>




</html>
