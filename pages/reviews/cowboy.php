<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Cowboy Burger | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body>
        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main>
            <h2>Teton Grill</h2>
            <h3>Cowboy Bacon Burger</h3>

            <p>
                The cowboy bacon burger is the most expensive burger in Teton Grill.
                It consists of bacon, fried onion rings, and the burger itself. You
                get 4 choices of vegetables, lettuce, tomatoes, pickle and onion.
                And for 3 choices of sauces, BBQ, Ranch, and Jalapeno Ranch.  I choose
                lettuce, tomatoes and BBQ. The waiting time took about 5-7 minutes to
                make. That is because they actually cook the burger in front of you.
                The cooker and the server were respectable and nice. The burger is
                surprisingly tasty. I like its salty spices and the BBQ sauce was a nice
                touch too. I sure see why they call this a Cowboy burger. The fries
                in the other hand was soggy and cold. If they were crunchy and warm,
                then it would have been great because the spices it has are delicious.
                The French fries spices taste like the spices they use in Red Robbins.
                The fried onions gave the burger an awesome and tasty small crunch to
                it.  At the end, it really did not fill me up completely. I have to
                say I feel very neutral about this food item.                               
            </p>
            <div id="cowbowpic">
                <img class="co" src="/folders/images/food/135.jpg" alt="Cowboy Bacon Burger">  
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
