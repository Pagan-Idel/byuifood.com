<!DOCTYPE html>

<html>
    <head>

        <title>Home | cit336</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336/public/cit336module/head.php'; ?>

    </head>

    <body>
        <div>   
            <header>
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336/public/cit336module/header.php'; ?> 
                </div>  
            </header>    
            <main> 
                <div>
                    <p>Hello cit336! Welcome to my website!! </p>
                   
                </div>
            </main>
        </div>
        <aside> 
            <div>   

            </div>
        </aside>  
        <footer> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/cit336/public/cit336module/footer.php'; ?>
                <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
            </div>
        </footer>    
    </body>
</html>