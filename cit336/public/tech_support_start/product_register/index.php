<?php

// Get your db connection file, be sure it has a new connection to the
// tech support database
require('../model/database.php');

// Get the models needed - work will need to be done in both
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');

$action = filter_input(INPUT_POST, 'action');

if ($action == 'get_mail') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $names = get_customer_by_email($email);
    if ($email == NULL || $email == FALSE) {
        include('customer_login.php');
        echo "Invalid email! Please try again.";
    } else if ($names == NULL) {
        include('customer_login.php');
        echo "Sorry your email was not found!";
    } else {
        include('product_register.php');
    }
} else if ($action == 'reg_product') {
    $product_code = filter_input(INPUT_POST, 'product_code');
    $customer_id = filter_input(INPUT_POST, 'customer_id');

    if ($product_code == NULL || $product_code == FALSE ||
            $customer_id == NULL || $customer_id == FALSE) {
        echo "Sorry something went wrong! Please click home and try again.";
        include('product_register.php');
    }
    add_registration($customer_id, $product_code);
    include('success.php');
}





/*
 * What you will need
 *   1. The product_register application should default to the customer_login view
 *   2. If the email address is not provided, make them enter one
 *   3. Check if the email entered is valid, if so get the user information from 
 *       the database
 *   4. Send the logged-in user to the product registration page
 *   5. Automatically enter the user's name in the product registration form
 *   6. When the page loads the product list should be a drop down menu of 
 *       products built from a resultset queried out of the database
 *   7. If the product registration data is submitted, register the product
 *   8. If the product is registered successfully, confirm it to the user.
 */



