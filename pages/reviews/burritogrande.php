<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Burrito Grande | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header> 
        <main>
            <h2>Caliente</h2>
            <h3>Burrito Grande</h3>

            <p>
                I opened the carton up and the burrito did not look very appetizing.
                I order a sauce and they put the sauce over the burrito and it just
                dripped on the side. I am sure it will make the burrito very soggy
                later on. I took my first and the first thing that I realized was
                that the food was cold. I order a pork burrito and I have to say it
                was pretty tasty, but again cold! The pork itself was sweet and good
                tasting. The pico de gallo was simply a mixture of tomatoes and onions
                and that’s all it tasted like. I order fried beens, pork, rice, and
                the proportion of these in my burrito was way off. Way to much fried
                beans and barely any rice, it did have a nice amount of pork in it.
                At the end, my last few bites, all that was left was extra unused tortilla,
                which I did not eat because it was too soggy with the sauce. Another thing
                I liked was that they were not kidding when they burrito grande, which
                for those that do not know Spanish that means big burrito. So yes,
                it is big, and I am very full.                    
            </p>
            <div id="burritopic">
                <img class="bg" src="/folders/images/food/070.jpg" alt="Burrito Grande">
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
