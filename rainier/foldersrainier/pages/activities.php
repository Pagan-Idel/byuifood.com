<!DOCTYPE html>

<html>
    <head>

        <title>Activities | byuifood.com/rainier</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headrainier.php'; ?> 

    </head>

    <body role="application" id="activity">
        <div>   
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headerrainier.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>
                    <h1>Activities</h1>
                    <p>Mount Rainier National Park provides you with exceptional openings for charming drives, hiking, and mountain climbing. Most roads are open from late May to early October and all provide amazing views and access to a variety of hiking trails and other sites. Please plan an in-depth exploration in order to view our entire park! We recommend planning a two day visit with us if you plan on exploring more than two areas. Please visit the links below for activities available at Mount Rainier National Park.</p>

                    <div class="borderparent"> 
                        <div class="picborder">
                            <h2>Go Bicycling</h2>
                            <a href="/rainier/foldersrainier/pages/activity1.php" title="Bicycling"> 
                                <img class="headerimage" src="/rainier/foldersrainier/media/bike.jpg" alt="Bicycling">
                            </a>
                        </div>
                        <div class="picborder">
                             <h2>Go Climbing</h2>
                            <a href="/rainier/foldersrainier/pages/activity2.php" title="Climbing"> 
                                <img class="headerimage" src="/rainier/foldersrainier/media/climbing.jpg" alt="Climbing">
                            </a>
                        </div>
                        <div class="picborder">
                             <h2>Go Hiking</h2>
                            <a href="/rainier/foldersrainier/pages/activity3.php" title="Hiking"> 
                                <img class="headerimage" src="/rainier/foldersrainier/media/hiking.jpg" alt="Hiking">
                            </a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <aside role="complementary"> 
            <div>   

            </div>
        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/footerrainier.php'; ?> 
            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    
    </body>
</html>