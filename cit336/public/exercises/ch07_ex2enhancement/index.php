<?php
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    include('home.php');
} else if ($action == 'get_info') {
// get the data from the form
    $investment = filter_input(INPUT_POST, 'investment', FILTER_VALIDATE_FLOAT);
    $interest_rate = filter_input(INPUT_POST, 'interest_rate', FILTER_VALIDATE_FLOAT);
    $years = filter_input(INPUT_POST, 'years', FILTER_VALIDATE_INT);
    $checked = filter_input(INPUT_POST, 'checked');

// validate investment
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
    $future_value = $investment;

    if ($checked) {
        $compound_monthly = 'Yes';
        $month = $years * 12;
        $monthly_rate = $interest_rate / 12;
        for ($i = 1; $i <= $month; $i++) {
            $future_value = ($future_value + ($future_value * $monthly_rate * .01));
        }
    } else {
        $compound_monthly = 'No';
        for ($i = 1; $i <= $years; $i++) {
            $future_value = ($future_value + ($future_value * $interest_rate * .01));
        }
    }

//apply currency and percent formatting
    $investment_f = '$' . number_format($investment, 2);
    $yearly_rate_f = $interest_rate . '%';
    $future_value_f = '$' . number_format($future_value, 2);

    include('results.php');
}






?>
