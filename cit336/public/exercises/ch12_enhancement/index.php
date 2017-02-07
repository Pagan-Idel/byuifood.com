<?php

require 'functions.php';
$lifetime = 60 * 60 * 24 * 14;           
session_set_cookie_params($lifetime, '/');
session_start();

// get the array of tasks from the session
if (empty($_SESSION['calculation'])) {
    $_SESSION['calculation'] = array();
} 
$future_value = array();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    include('home.php');
} else if ($action == 'get_info') {
// get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);
    $checked = filter_input(INPUT_POST, 'checked');

    $_SESSION['calculation']['investment'] = $investment;
    $_SESSION['calculation']['interest_rate'] = $interest_rate;
    $_SESSION['calculation']['years'] = $years;

    
    

    if ($investment === FALSE) {
        $error_message = 'Investment must be a valid number.';
    } else if ($investment <= 0) {
        $error_message = 'Investment must be greater than zero.';
        // validate interest rate
    } else if ($interest_rate === FALSE) {
        $error_message = 'Interest rate must be a valid number.';
    } else if ($interest_rate <= 0) {
        $error_message = 'Interest rate must be greater than zero.';
        // validate years
    } else if ($years === FALSE) {
        $error_message = 'Years must be a valid whole number.';
    } else if ($years <= 0) {
        $error_message = 'Years must be greater than zero.';
    } else if ($years > 30) {
        $error_message = 'Years must be less than 31.';
        // set error message to empty string if no invalid entries
    } else {
        $error_message = '';
    }

// if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }

// calculate the future value
    $future_value = future_value($checked,  $_SESSION['calculation']['years'], $_SESSION['calculation']['interest_rate'], $_SESSION['calculation']['investment']);


    if ($checked) {
        $compound_monthly = "Yes";
    } else {
        $compound_monthly = "No";
    }

//apply currency and percent formatting
    $investment_f = format($_SESSION['calculation']['investment']);
    $yearly_rate_f = $_SESSION['calculation']['investment'] . '%';
    $future_value_f = format2($future_value);

    include('results.php');
}
$_SESSION['calculation'] = $calculation;
?>
