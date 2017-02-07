<!DOCTYPE html>

<html>
    <head>

        <title>Home | byuifood.com/rainier</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headrainier.php'; ?> 

    </head>

    <body role="application">
        <div>   
            <header role="banner">
                <div>
                   
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headerrainier.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>

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