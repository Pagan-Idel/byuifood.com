<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>
        <title>Contact & Feedback | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 

    </head>

    <body id="feedback">

        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main role="main"> 
            <div>
                <h1>Contact/Feedback</h1>

                <video width="640" height="480" src="/folders/media/videoconvert.mp4" controls>
                </video>


                <p>Hello! My name is Idel Pagan. If you agree or disagree with
                    any of my review please send me a message! If you have anything extra to say about 
                    the food you ate at the Crossroads, I would love to hear it too! Also give me 
                    feedback. How am I doing? Report me any typos or bugs. I am human you know!
                    Thanks for visiting byuifood.com!</p> 


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
        <aside role="complementary"> 

        </aside>  
        <footer role="contentinfo"> 
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/footer.php'; ?> 

            </div>
            <?php echo 'Last Updated: ' . date('j F, Y', getlastmod()) ?>
        </footer>    
    </body>
</html>