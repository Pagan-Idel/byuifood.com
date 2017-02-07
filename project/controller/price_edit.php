<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Prices | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body id="prices">

        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main role="main"> 
          
                <h1>Food Prices</h1>
                <?php if (isset($_SESSION['login'])): ?>

                    <p>Please edit the item to its appropriate price.</p>




                    <table>
                        <tr>
                            <td class="tabletitle"> <h2>Item</h2> </td>
                            <td class="tabletitle"><h2>Price</h2></td>


                        </tr>





                        <tr class="td">
                            <td><?php echo $item['itemName']; ?></td>
                            <td> <form action="index.php" method="post">
                                    <input type="text" name="price" value="<?php echo $item['itemPrice']; ?>" />
                                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>" />
                                    <input type="hidden" name="action" value="save"/>
                                    <input type="submit"  value="Save"/>



                                </form>
                            </td>
                        </tr>



                    </table>


                <?php else: ?>
                    <p>Sorry! You must log in to see the food item prices!</p>
                <?php endif; ?>
  

        </main>
        <aside role="complementary"> 
            <div>   
            </div>
        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; 
                unset($message);
                ?> 

            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    

    </body>
</html>
