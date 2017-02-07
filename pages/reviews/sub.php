<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Sub | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>
        <main>
            <h2>Stacks & Wraps</h2>
            <h3>Sub</h3>

            <p>As this was my first time ordering a sub, the girl helping me build it
                was very nice. She recommended the sauce and was confident in her choices.
                The sandwich it self looks good, but looks messy. So make sure to have
                a lot of napkins nearby. My first bite was very satisfying; the cheese
                and roasted beef flavors really came out. These two ingredients go
                well together. The bread is perfectly toasted and gives it that 
                satisfying crush. The mayo is not overpowering at all and gives it
                the right taste. The jalapino gave the sandwich just the right amount 
                of kick of spicy. I was not kidding when I said that you will need 
                napkins for this. The mayo was all over my face. The sub, even toasted, 
                got cold real quick, so that was disappointing, the flavors of the sub
                really got my mind away from temperature. Something I really did not 
                like was the fact that I ordered a medium (6 inches) and it did not fill
                me up at all. For 5.82? I considered it pretty pricy.               
            </p>
            <div id="subpic">
                <img class="su" src="/folders/images/food/108.jpg" alt="Sub">
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
