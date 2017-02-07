<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Teriyaki Bowl | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>  
        <main>
            <h2>Henry's Fork BBQ</h2>
            <h3>Teriyaki Bowl</h3>

            <p>To order you pick out from three different types of items: white rice,
                brown rice, and noodles. You have one choice of meat: teriyaki meat.
                And three different types of teriyaki sauces. When I ordered what I 
                wanted, which was white rice and teriyaki with a special sauce,
                (the server recommended this sauce) the server was quick. I was very
                pleasant at the amount of teriyaki he put on my bowl. Getting my first
                bite of the teriyaki, I realized that the food was not warm. The rice
                was really sticky so it was easy to pick out with my chop sticks. The
                sauce was perfectly spiced. Not too sweet and not too spicy. It came
                in a very convenient bowl that was easily portable. I was sitting in
                front of two girls gossiping about boys and their ideas of what they
                will do for the night. This provided me entertainment while I ate my
                teriyaki bowl. Now, towards the end of the bowl, the sauce had fallen 
                and cumulated towards the bottom. This resulted in rice being bathed
                by this sauce. This was not very tasty at all. And my stomach started
                to reject it because of how sweet is started to become. The amount of
                the food was just enough to get me full so I was satisfied with that 
                and the amount I paid for it. Also, there was a piece of meat that was
                not cut well so I was trying to cut it with my chop stick so not to eat
                the whole chunk of a huge piece of meat. Needless to say, I looked like
                an idiot trying to do so.  And most likely the girls in front of me
                thought so too.                    
            </p>
            <div id="teriyakipic">
                <img class="te" src="/folders/images/food/004.jpg" alt="Menu">
                <img class="te" src="/folders/images/food/005.jpg" alt="Teriyakibowl">
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
