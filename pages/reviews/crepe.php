<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Crepe | byuifood.com</title>
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
            <h3>Crepe</h3>

            <p>   I decided to order a crepe today because my classes were cancelled
                and it is early in the morning. My crepe cooker, Martha, was very nice.
                She spoke Spanish with me, while making it. It took about 5-7 minutes 
                to make. She baked the crepe and at a perfectly toasted temperature.
                I told her to add Nutella, whip cream, strawberries, bananas, and
                powdered sugar. The first few bites were so good, I literally “mmm”
                from satisfaction. I have to say though; the plate does get messy from
                the Nutella, and whip cream ingredients.  When you take a bite, the
                first thing you notice is the nice crispy crunch from the crepe. Then
                comes the Nutella flavor and the fruits just combine flavor in your mouth
                perfectly. I used a plastic knife to cut through the Crepe, but I
                recommend using a metal one to cut through the crispy crepe. Also sense
                I was using a plastic knife, I was applying a lot of pressure to the
                crepe so the bananas and strawberries were being forced out of the crepe
                which made it that much messier. At the end of the meal, I was almost
                full, which is not bad sense I only paid 4.14. I recommend the crepe from
                a good and cheap breakfast. I got a crepe card, were if I buy 10 crepes
                they will give me a free one. This is a nice addition if you are deciding
                to eat them daily.<p>          

            </p>
            <div id="crepepic">
                <img class="cr" src="/folders/images/food/137.jpg" alt="Menu">
                <img class="cr" src="/folders/images/food/138.jpg" alt="Crepe">  
                <img class="cr" src="/folders/images/food/140.jpg" alt="Card">
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
