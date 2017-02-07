<?php
  //gets the data from the form
  $product_description = filter_input(INPUT_POST, 'product_description');
  $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_FLOAT);
  $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_FLOAT);
  //validate product_description
  if (!ctype_alpha($product_description)) {
      $error_message = 'Product Description must be all characters. And no spaces.';
  // validate list price
  } else if ($list_price === FALSE) {
      $error_message = 'List Price must be a valid number.';
  } else if ($list_price <= 0) {
      $error_message = 'List Price must be greater than zero.';
    // validate discount_percent
  } else if ($discount_percent === FALSE) {
       $error_message = 'Discount Percent must be a valid number.';
  } else if ($discount_percent <= 0) {
      $error_message = 'Discount Percent must be greater than zero.';
  } else {
      $error_message = '';
  }
  
  // if an error message exists, go to the index page
  if ($error_message != '') {
      include('index.php');
      exit();
  }
  
  
  //calculate the discount and discounted price
  $discount = $list_price * $discount_percent * .01;
  $discount_price = $list_price - $discount;
  
   //apply 8 % tax to the discounted price
   $tax = 8;
   $tax_amount = $discount_price * $tax * .01;
   $grand_total = $discount_price + $tax_amount;
          
  //apply currency formatting to the dollar and percent amounts
  $list_price_f = '$'.number_format($list_price, 2);
  $discount_percent_f = $discount_percent.'%';
  $discount_f = '$'.number_format($discount, 2);
  $discount_price_f = '$'.number_format($discount_price, 2);
  $tax_f = $tax.'%';
  $tax_amount_f = '$'.number_format($tax_amount, 2);
  $grand_total_f = '$'.number_format($grand_total, 2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        
        <span><?php echo htmlspecialchars($product_description);?></span><br>
        
        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount_percent_f);  ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_f;   ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_f; ?></span><br>
        
        <label>Sales Tax Rate</label>
        <span><?php echo $tax_f ?></span><br>
                
        <label>Sales Tax Amount</label>
        <span><?php echo $tax_amount_f ?></span><br>
        
         <label>Grand Total</label>
        <span><?php echo $grand_total_f ?></span><br>
        
      
        
    </main>
</body>
</html>