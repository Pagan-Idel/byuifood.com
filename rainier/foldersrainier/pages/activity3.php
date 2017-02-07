<!DOCTYPE html>

<html>
    <head>

        <title>Hiking | byuifood.com/rainier</title>
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
                    <h1>Hiking</h1>
                    <p>Come with us and experience the diverse natural wonders of Mount Rainer.  Our hikes cover a range of terrain from gentle slopes to strenuous mountains, waterfalls and rocky peaks, spring wildflowers and fall colors, fog covered mountains and clear views for miles. Permits are not required for a day hiking so come enjoy our scenic lands for free. We recommend going with Olivia, our guide, in order to receive the best experience at our park. You can contact her <a href="/rainier/foldersrainier/pages/guide1.php" title="olivia">here</a>!</p>
                    <div class="borderparent"> 
                        <div class="picborder">
                            <img class="noheaderimage" src="/rainier/foldersrainier/media/hiking1.jpg" alt="Hiking">
                        </div>
                        <div class="picborder">
                            <img class="noheaderimage" src="/rainier/foldersrainier/media/hiking2.jpg" alt="Hiking">            
                        </div>
                        <div class="picborder">
                            <img class="noheaderimage" src="/rainier/foldersrainier/media/hiking3.jpg" alt="Hiking">
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