<!DOCTYPE html>

<html>
    <head>

        <title>Home | byuifood.com/rainier</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headrainier.php'; ?> 

    </head>

    <body role="application" id="guides">
        <div>   
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headerrainier.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>
                    <h1>Guides</h1>
                    <p>Here are our guides! If you would like to explore Mount Rainier with a guide you may do so by making an appointment with them through their email. After doing so, you will hear from them within a business day! Click on the image to contact them or to learn more about them!</p>
                    <div>
                        <div class="borderparent"> 
                            <div class="picborder">
                                <h2>Olivia Mulloy</h2>
                                <a href="/rainier/foldersrainier/pages/guide1.php" title="Olivia"> 
                                    <img class="headerimage" src="/rainier/foldersrainier/media/guide1.jpg" alt="Olivia">
                                </a>
                            </div>
                            <div class="picborder">
                                <h2>Mike Hussa</h2>
                                <a href="/rainier/foldersrainier/pages/guide2.php" title="Mike"> 
                                    <img class="headerimage" src="/rainier/foldersrainier/media/guide2.jpg" alt="Mike">
                                </a>
                            </div>
                            <div class="picborder">
                                <h2>Conrad Mallard</h2>
                                <a href="/rainier/foldersrainier/pages/guide3.php" title="Conrad"> 
                                    <img class="headerimage" src="/rainier/foldersrainier/media/guide3.jpg" alt="Conrad">
                                </a>
                            </div>
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