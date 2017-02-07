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
                <h1>Download Tic Tac Toe Game</h1>
                <p>You can open it with any program you like to use. Copy and Pase the code into an IDE and play!</p>
                <div>
                    <div id="homelinks">
                        <a class="ar" href="/folders/media/TicTacToe.java" download><span>Click to Download</span> </a> 
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
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; ?> 
                
            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    
    </body>
</html>