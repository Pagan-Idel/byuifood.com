<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Calzone | byuifood.com</title>
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
            <h3>Calzone</h3>

            <p>
                The calzone pizza looked amazing on display. They looked very filling.
                And for only a total of 4.76 tax included. The first bite was ok
                considering it was the corner of the calzone so all it had was the bread.
                I enjoyed it as it was glazed with garlic butter. It was warm so I
                enjoyed that too. Cannot complain about the chicken that was inside
                of it either. I was sitting with my Swedish friend, and he provided
                me with entertainment and taught a few words in Swedish. The calzone
                was okay. The BBQ was only found in the very center of the calzone. I
                found myself eating for bread than anything else. More than half way
                through the calzone and I was not even close to getting full.  As I
                was about to finish my calzone, I did not realize that the tip of plastic
                fork teeth broke off and I started to chew on it. This really hurt my
                teeth. I do not know who do blame. The Calzone, or the crossroads or
                myself. Either way it was not a pleasurable experience.  I finally
                finished the calzone, finding myself not full at all. Overall experience,
                nothing special just a calzone.                    
            </p>
            <div id="calzonepic">
                <img class="ca" src="/folders/images/food/105.jpg" alt="Menu">
                <img class="ca" src="/folders/images/food/044.jpg" alt="Calzone">
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
