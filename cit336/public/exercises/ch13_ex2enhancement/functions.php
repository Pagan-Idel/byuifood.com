<?php
function future_value($checked, $years, $interest_rate, $investment){
       $future_value = $investment;
    if ($checked) {
        
        $month = $years * 12;
        $monthly_rate = $interest_rate / 12;
        for ($i = 1; $i <= $month; $i++) {
            $future_value = ($future_value + ($future_value * $monthly_rate * .01));
        }
    } else {
       
        for ($i = 1; $i <= $years; $i++) {
            $future_value = ($future_value + ($future_value * $interest_rate * .01));
        }
    }
    return $future_value;
}

function format($number){
    return '$' . number_format($number, 2);
}

function format2($number){
   return '$' . number_format($number, 2);
}


?>