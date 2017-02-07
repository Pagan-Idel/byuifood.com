<!DOCTYPE html>

<html>
    <head>

        <title>Contact | byuifood.com/rainier</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headrainier.php'; ?> 

    </head>

    <body role="application" id="contact">
        <div>   
            <header role="banner">
                <div>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/rainier/foldersrainier/modules/headerrainier.php'; ?> 
                </div>  
            </header>    
            <main role="main"> 
                <div>
                    <h1>Contact</h1>
                    <p>Thank you visiting out website! We want to make your experience as great as possible. Please contact us with any questions about the park, activities, and/or about our guides. </p>
                     <?php
                $action = $_REQUEST['action'];
                if ($action == "") /* display the contact form */ {
                    ?>
                    <form  method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="action" value="submit">
                        <h2>Name</h2>
                        <input name="name" type="text" value="" size="30"/>
                        <h2>Email</h2>
                        <input name="email" type="text" value="" size="30"/>
                        <h2>Message</h2>
                        <textarea name="message" rows="7" cols="60"></textarea><br>
                        <input type="submit" value="Send email"/>
                    </form>
                    <?php
                } else /* send the submitted data */ {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $message = $_REQUEST['message'];
                    if (($name == "") || ($email == "") || ($message == "")) {
                        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                    } else {
                        $from = "From: $name<$email>\r\nReturn-path: $email";
                        $subject = "Message sent using your contact/feedback form";
                        mail("idelboricua@gmail.com", $subject, $message, $from);
                        echo "Thank You! Your message was recieved!";
                    }
                }
                ?>
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