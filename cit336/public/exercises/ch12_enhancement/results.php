<!DOCTYPE html>
<html>
    <head>
        <title>Future Value Calculator</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <main>
            <h1>Future Value Calculator</h1>

            <label>Investment Amount:</label>
            <span><?php echo $_SESSION['calculation']['investment']; ?></span><br>

            <label>Yearly Interest Rate:</label>
            <span><?php echo $_SESSION['calculation']['interest_rate']; ?></span><br>

            <label>Number of Years:</label>
            <span><?php echo $_SESSION['calculation']['years']; ?></span><br>

            <label>Future Value:</label>
            <span><?php echo $future_value_f; ?></span><br>
              <label>Compound Monthly:</label>
            <span><?php echo $compound_monthly; ?></span><br>
        </main>
    </body>
</html>