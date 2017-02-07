<?php

session_start();
require('../model/database.php');
require('../model/edit_db.php');
require('../model/create_db.php');
require('../model/delete_db.php');
require('../model/update_db.php');
require('../model/items_db.php');
require('../model/login_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        // Skip login requirement if customer is already logged in
        // Determine the login status in the if statement below

        if (isset($_SESSION['login'])) {
            $action = 'display_price';
        } else {
            $action = 'display_login';
        }
    }
}


switch ($action) {
    case 'display_login':
        include('user_login.php');
        break;
    case 'login':

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = filter_input(INPUT_POST, 'password');
        if ($email == NULL || $email == FALSE || $password == NULL || $password == FALSE) {
            $message = 'Email and password need to be in the correct format.';
            include('user_login.php');
            break;
        }
        $user = login_user($email, $password);
        if ($user == NULL) {
            $message = 'Sorry, your email or password was incorrect!';
            include('user_login.php');
        } else if ($user) {
            $_SESSION['user'] = $user;
            $_SESSION['login'] = TRUE;
            include('account.php');
        } else {
            $message = 'Sorry invalid email or password!';
            include('user_login.php');
        }
        break;
    case 'create':
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');
        $password2 = filter_input(INPUT_POST, 'password2');
        if ($email == NULL || $email == FALSE) {
            $message = "Sorry the email must be valid!";
            include('create_account.php');
        } else if ($password !== $password2) {
            $message = "Sorry your passwords do not match!";
            include('create_account.php');
        } else {
            add_user($email, $password, $username);
            $user = login_user($email, $password);
            $_SESSION['user'] = $user;
            $_SESSION['login'] = TRUE;

            include('account.php');
        }
    case 'display_price':

        if (isset($_SESSION['login'])) {
            $user = $_SESSION['user'];
            $items = get_items();
            include('prices.php');
        } else {
            $message = 'Sorry you must be logged in to see the price table!';
            include('user_login.php');
        }


        break;
    case 'edit':

        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if ($id == NULL || $id == FALSE) {
            $message = "Sorry something went wrong. Try again or contact the admin!";
            include('price.php');
            break;
        } else {
            $item = get_item($id);

            include('price_edit.php');

            break;
        }
    case 'save':
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);
        $id = filter_input(INPUT_POST, 'id');
        if ($id == NULL || $id == FALSE) {
            $message = 'Sorry someting went wrong!';
            include('price.php');
            break;
        } else if ($price == NULL || $price == FALSE) {
            $message = 'Sorry that is an invalid input!';
            $items = get_items();
            include('prices.php');
            break;
        } else {
            update_price($id, $price);
            $items = get_items();
            include('prices.php');

            break;
        }

    case 'delete':
        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);
        if ($id == NULL || $id == FALSE) {
            $message = "Sorry something went wrong. Try again or contact the admin!";
            include('account.php');
        } else {
            delete_user($id);
            $message = "Your account has been deleted successfully.";
            include('user_login.php');
            break;
        }

    case 'logout':

        unset($_SESSION['login']);
        unset($_SESSION['user']);
        session_destroy();

        include('user_login.php');
        break;
}    

	