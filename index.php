<!DOCTYPE html>

<html>
    <head>

        <title>Home | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body role="application">
        <div>   
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>
                    <div id="welcome">
                        <h1>Welcome</h1>
                    </div>
                    <div id="welcomeparagraph">
                        <p>Hello! My name is Idel and I will review the food given at the CrossRoads. The purpose 
                            of this website is to provide my own personal feedback and critiques towards the foods 
                            that are available at Brigham Young University Idaho. That way you know what   
                            is good and what is not good in the university’s cafeteria.</p><br>    
                    </div>
                    <div id="homelinks">
                        <a class="ar" href="/pages/availabilities/availability(caliente).php"><span>Caliente</span> </a> 
                        <a class="ar" href="/pages/availabilities/availability(tuscan).php"><span>Tuscan Valley</span></a>
                        <a class="ar" href="/pages/availabilities/availability(bbq).php"><span>Henry's Fork BBQ</span> </a><br><br> 
                    </div>
                    <div id="homelinks2">
                        <a class="ar" href="/pages/availabilities/availability(crepe).php"><span>Crepe Corner</span></a>
                        <a class="ar" href="/pages/availabilities/availability(sub).php"><span>Stacks & Wraps</span> </a>
                        <a class="ar" href="/pages/availabilities/availability(teton).php"><span>Teton Grill</span> </a><br><br>  
                    </div>
                    <audio controls>
                        <source src="/folders/media/midnight.ogg" type="audio/ogg">
                        Your browser does not support the audio tag.
                    </audio>
                </div>
            </main>
        </div>
        <aside role="complementary"> 
            <div>   

            </div>
        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; ?> 
                <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
            </div>
        </footer>    
    </body>
</html>