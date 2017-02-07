<!DOCTYPE html>
<html>
    <head>
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>

    <body>
        <main>
            <h1>Future Value Calculator</h1>
            <?php if (!empty($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } // end if  ?>
                <form action="index.php" method="post">
                <input type="hidden" name="action" value="get_info">

                <div id="data">
                    <label>Investment Amount:</label>
                    <select name="investment">
                        <?php for ($investment = 10000; $investment <= 50000; $investment = $investment + 5000) : ?>
                            <option value="<?php echo $investment; ?>" ><?php echo $investment; ?>
                            </option>
                        <?php endfor; ?>
                    </select><br>

                    <label>Yearly Interest Rate:</label>
                    <select name="interest_rate">
                        <?php for ($interest_rate = 4; $interest_rate <= 12; $interest_rate = $interest_rate + .5) : ?>
                            <option value="<?php echo $interest_rate; ?>" ><?php echo $interest_rate; ?>
                            </option>
                        <?php endfor; ?>
                    </select><br>

                    <label>Number of Years:</label>
                    <input type="text" name="years"
                           value="<?php $years = 1; echo $years; ?>"/><br>
                    
                </div>

                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="checkbox" name="checked"/>Compound Interest Monthly
                    <input type="submit" value="Calculate"/><br>
                </div>

            </form>
        </main>
    </body>
</html>