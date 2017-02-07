<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Pulled Pork | byuifood.com</title>
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
            <h3>Pulled Pork</h3>

            <p>I ordered a pulled pork , mashed potatoes and gravy and a mashed, red,
                goowy item. Ready to get my hands messy I took the first bite. The
                pulled pork was sweet which is exactly what I expected. The pork was
                not very hot at all. In fact it was barely warm, and I did not find
                that very pleasant. It was very easy to chew and the bread was just
                fine as well. I took a bite at the red squash ting and my initial thoughts
                was that it tasted like bread with cheese and tomatoes in it. I did not
                like the texture of it. It felt as if I was eating very soggy bread.
                It was nice and warm though, so that made it more eatable. The mash
                potatoes had a little too much pepper in it. The gravy a lone was fine
                though, that tasted good. Not even half way there and I was already
                starting to get full. If you do not already know, I love when I buy
                something that actually gets me full. Otherwise, I would be very frustrated.
                I was eating the mash potatoes and that red squash thing with a fork
                and the sandwich with my bare hands. I have to say that it was a very 
                strange meal to be switching from using the fork to using my hands.  
                As I kept eating I notice that the button bread from the pulled pork 
                sandwich was not getting soggy. That just told me that the pulled pork 
                was not in excess of juice. I liked it because I did not get my hands 
                to get wet and dirty. I also liked that I finished the button bread 
                and the top bread at the same time. I finished the mashed potatoes fine
                too leaving my mouth with a pepper flavor. A drink of water washed 
                the flavor out though. I did leave the red squash thing as it was not
                very appetizing. Over though, I was pleased with the meal. What made 
                me the most happy was that I was full at the end. 

            </p>
            <div id="pulledpic">   
                <img class="pu" src="/folders/images/food/050.jpg" alt="Menu">
                <img class="pu" src="/folders/images/food/051.jpg" alt="Pulled Pork">
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
