<!DOCTYPE html>
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<html>
    <head>

        <title>Site Plan | byuifood.com</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/head.php'; ?> 


    </head>

    <body>

        <header role="banner">
            <div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/folders/modules/header.php'; ?> 
            </div>  
        </header>    
        <main role="main"> 
            <div>
                <h1>Site Plan</h1>
                <h2>Site Name</h2>
                <h3>byuifood.com</h3>
                <h2>Purpose</h2>
                <p>The purpose of this website is to provide my own personal feedback and critiques towards the foods that are available at Brigham Young University Idaho. That way my audience knows what is good and what is not good in the university’s cafeteria.
                <h2>Target Audience</h2>  
                <p>My site is intended for students, male or female, in Brigham Young University Idaho who eat at the cafeteria. These are people who eat at the Crossroads specifically. Students typically in the age of 18 to 25 (or whenever they graduate). These students come to my website to see what is good to eat and what is not good to eat at the Crossroads. These students also may want to know what the prices of the food items are. Teachers who eat at the Crossroads are also a target audience.</p>
                <h2>Personas</h2>
                Katie Johnson
                <img class="sp" src="/folders/images/katie.jpg" alt="Katie">
                <p>This is Katie Johnson, a student at Brigham Young University – Idaho. She is in the Fall/Winter track system and is a full time student. She is a very hungry 21 year old girl. She is single and does not have a lot of money in her bank. She is focused, goal-oriented with a strong leadership role. She spends her time doing homework and partying during the weekends. She does have a nice break during lunch and likes to eat at the Crossroads at BYUI. She has done this for a while now but is tired of eating the same thing over and over again. She says: “What other types of foods are good enough to eat and cheap enough?”</p>
                Zamir Eachann
                <img class="sp" src="/folders/images/zamir.JPG" alt="Zamir">
                <p>This is Zamir Eachann , a student at Brigham Young University – Idaho. He is in the Winter/Spring track system, a part time student who works at the library and is 24 years old. His work schedule leaves him a break during lunch time and wants to know what to eat. Moving to America recently, he is very skeptical of the different types of food available at the Crossroads. His job gives him an allowance and allows him to eat the Crossroads. Zamir has a big appetite and wants the food to fill him up to get him through the rest of the day. He says “What food should I avoid and what food fills me up?”</p>
                <h2>Scenarios</h2>
                <ul>
                    <li>What food items are expensive?</li>
                    <li>What food items are cheap?</li>
                    <li>What food items taste good?</li>
                    <li>What food items taste bad?</li>
                    <li>What food item fills me up?</li>
                    <li>What food item is worth to buy?</li>
                    <li>What are different alternative food items to get?</li>
                    <li>What food items are messy to eat?</li>
                    <li>What should I need to eat the food item?</li>
                    <li>Where is it located in the Crossroads?</li>
                </ul>
                <h2>Asset List</h2>
                <p>Home Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Text that explains who I am and what I am doing</li>
                    <li>Circular links (buttons) that link to different sections of the crossroads</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Music Audio that would go well with the site</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>
                </ul>
                <p>Reviews Available Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Text that explain the available food found in a specific location of the crossroads</li>
                    <li>Circular links (buttons) that take the user to a specific review of the food item</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>
                </ul>
                <p>Review Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Image of the food that I got when I ordered the food</li>
                    <li>Title of the food name</li>
                    <li>Text of the food review (this answers the scenarios)</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>                    
                </ul>
                <p>Price Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>      
                    <li>A table grid containing the food item and its price</li>
                    <li>A header note mentioning tax included</li>

                </ul>
                <p>Contact Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>      
                    <li>A video of me explaining how and why the audience should send me an email</li>
                    <li>Input for their name</li>
                    <li>Input for their email</li>
                    <li>Input for their questions/feedback</li>
                    <li>Submit button</li>
                </ul>
                <p>Feedback Page</p>
                <ul>
                    <li>Logo to the top left of the page</li>
                    <li>Links (menu buttons) that link to home page, price page, contact and feedback page</li>
                    <li>Links (in the footer) to a site plan, presentation and feedback page</li>      
                    <li>A video of me explaining how and why the audience should send me an email</li>
                    <li>Input for their name</li>
                    <li>Input for their email</li>
                    <li>Input for their questions/feedback</li>
                    <li>Submit button</li>
                </ul>
                <h2>Site Map</h2>
                <img src="/folders/images/sitemap.jpg" alt="Site Map">
                <h2>Color Scheme</h2>
                <img src="/folders/images/colorscheme.png" alt="Color Scheme">
                <h2>Typography</h2>
                <table id="sitetable">
                    <tr>
                        <td>Item</td>
                        <td>Font</td>
                        <td>Size</td>
                        <td>Color</td>
                    </tr>
                    <tr>
                        <td>Default Paragraph Text</td>
                        <td>Noticia Text</td>
                        <td>1em</td>
                        <td>#00000 Background: #FFFFFF</td>

                    </tr>
                    <tr>
                        <td>Personal Review Text</td>
                        <td>Noticia Text</td>
                        <td>1em</td>
                        <td>#000000 Background: #FFFFFF</td>

                    </tr>
                    <tr>
                        <td>Menu Text and Navigation Text</td>
                        <td>Noticia Text</td>
                        <td>2vw</td>
                        <td>#333040</td>                
                    </tr>
                    <tr>
                        <td>Default Headings</td>
                        <td>Noticia Text</td>
                        <td>2em</td>
                        <td>#333040</td>
                    </tr>
                </table>
                <h2>Navigation</h2>
                <img src="/folders/images/nav.png" alt="Navigation">
                <p>These are the menu buttons. They will be located in the upper right part of the website. The menu is right next to the logo. The buttons will include: Home, Prices, Contact and Feedback. The colors of the words will be grey (#333040) and when the mouse clicks on the word, a blue (#475F9F) underline will appear below the word.</p>
                <img src="/folders/images/nav2.png" alt="Navigation2">
                <p>These types of buttons are links to different sections of the Crossroads. These will be located around the middle/center of my home page. There will be six of these buttons including: Caliente, Tuscan Valley, Crepe Corner, Henry’s Fork BBQ, Teton Grill, and Stacks & Wraps. The colors of these buttons will be blue (#475F9F). When a mouse is hovered over the buttons the color will change to a different shade of blue (#2C3B63).</p>
                <h2>Responsive Sketches</h2>
                <P>Desktop/Lapbtop</P>
                <img src="/folders/images/desktop.png" alt="Desktop/Laptop">
                <p>Tablet</p>
                <img src="/folders/images/tablet.png" alt="Tablet">
                <p>Smartphone</p>
                <img src="/folders/images/smartphone.png" alt="Smartphone">


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