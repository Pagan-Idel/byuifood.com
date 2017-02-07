<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Pasta Bowl | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>
        <main>
            <h2>Tuscan Valley</h2>
            <h3>Pasta Bowl</h3>

            <p>
                I ordered a pasta bowl, with bowtie pasta, alfredo sauce, meatballs,
                broccoli and mushrooms. I was pretty disappointed when they only gave
                me 3 meatballs to eat. They had to sautee the broccoli and mushroom
                so it took a while to have my bowl ready. I ordered it to go so they
                put it all into one bowl and it did not look very presentable. My first
                bight was cold but that was because it was picked from the top. My
                second bite was towards the bottom so it was warmer. Cold top, warm
                bottom just like my momma. I cannot complain about the sauce, it taste
                just like alfredo sauce would taste like. The broccoli tasted like
                broccoli with a little bit of garlic, so it had a nice taste to it. The
                mushrooms had a great taste to them, no complain there. They were warm
                and chewy. The pasta itself was just right, not undercooked, not
                overcooked. The meatball, even though looked dry, it was very juicy and
                delicious in the middle.  The food got cold quickly so that was not pleasant.
                The bowl ended up having too much alfredo sauce which made everything
                very goowy. Something I really enjoyed though, was the fact that it
                filled me completely and for a total of 4.76, that is not bad.       
            </p>
            <div id="pastabowlpics">
                <img class="pa" src="/folders/images/food/103.jpg" alt="Menu">
                <img class="pa" src="/folders/images/food/101.jpg" alt="Vegie">
                <img class="pa" src="/folders/images/food/102.jpg" alt="Pastas">
                <img class="pa" src="/folders/images/food/104.jpg" alt="Ingredients">
                <img class="pa" src="/folders/images/food/106.jpg" alt="Pasta Bowl">  
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
