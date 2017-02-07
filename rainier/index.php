<!DOCTYPE html>

<html>
    <head>

        <title>Home | byuifood.com/rainier</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headrainier.php'; ?> 

    </head>

    <body role="application" id="home">
        <div>
            <div>   
                <header role="banner">
                    <div>
                        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headerrainier.php'; ?> 
                    </div>  
                </header>
                <main>
                    <img class="hpp" src="/rainier/foldersrainier/media/mtrainier1.jpg" alt="Image number 1">

                    <div>
                        <p class="welcome">Welcome to Mount Rainier National Park. This beautiful 
                            park was built in 1899 and it is a must-see destination
                            when visiting Washington State. This park includes numerous
                            snowfields, glaciers, wildflower-filled meadows, and 1000
                            year-old towering firs highlight the park’s 235,625 acres!
                            Even better, it is full of wild life. A total of 63
                            different species call Mount Rainier their home, so you
                            are bound to see life!  
                            Mount Rainier is 14,410 feet tall and it is the most
                            prominent peak in the whole
                            Northwest! Come hike, bike, climb, ski and even camp
                            in this glorious Park. This
                            national park receives over 1.3 million visitors per year,
                            come join them! Read our websites for activities, guides,
                            and contact us with any questions! We are glad to help!
                            Thank you for visiting byuifood.com/rainier
                        </p>

                        <iframe  src="https://www.youtube.com/embed/97MnLIkBBCw" allowfullscreen></iframe>
                    </div>
                </main>
            </div>
            <aside role="complementary"> 
                <div>   

                </div>
            </aside>  
        </div>
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/footerrainier.php'; ?>               
            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    
    </body>
</html>