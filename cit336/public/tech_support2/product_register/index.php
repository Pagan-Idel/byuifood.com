<?php

// Get your database connection fil
$lifetime = 60*60*4; // 4 hour session
 session_set_cookie_params($lifetime);
 session_start();
require('../model/database.php');

require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/registration_db.php');


$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        // Skip login requirement if customer is already logged in
        // Determine the login status in the if statement below

        if (isset($_SESSION['login'])) {
            $action = 'display_register';
        } else {
            $action = 'display_login';
        }
    }
}


switch ($action) {
    case 'display_login':
        include('customer_login.php');
        break;
    case 'Login':
        // Build the login functionality here
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        if ($email == NULL || $email == FALSE || $password == NULL || $password == FALSE) {
            $message = 'Email and password need to be in the correct format.';
            include('customer_login.php');
            break;
        }
        $customer = login_customer($email, $password);
        if ($customer == NULL) {
            $message = 'Sorry, your email or password was incorrect!';
            include('customer_login.php');
        } else if ($customer) {
            $_SESSION['customer'] = $customer;
            $_SESSION['login'] = TRUE;
            $products = get_products();
            include('product_register.php');
        } else {
            $message = 'Sorry invalid email or password!';
            include('customer_login.php');
        }
        break;
    case 'display_register':
        // Before moving to the registration page,
        // get the customer information retreived during
        // the login process (part of the session)
        if (isset($_SESSION['login'])) {
            $customer = $_SESSION['customer'];
            $products = get_products();
            include('product_register.php');
        } else {
            include('customer_login.php');
        }


        break;
    case 'register_product':
        // Before registering the product get the
        // customer information retreived during
        // the login process (part of the session)
        if (isset($_SESSION['login'])) {
            $product_code = filter_input(INPUT_POST, 'product_code');
            $customer = $_SESSION['customer'];

            add_registration($customer['customerID'], $product_code);
            $message = "Product ($product_code) was registered successfully.";
            include('product_register.php');
        } else {
            include('customer_login.php');
        }
        break;
    case 'logout':
        // Build the logout functionality here
        unset($_SESSION['login']);
        unset($_SESSION['customer']);
        session_destroy();

        include('customer_login.php');
        break;
}    
echo '<pre>' . print_r($_SESSION, true) . '</pre>';