<?php

/*function calculateDiscount($type, $amount) {
    if ($type == 'regular') {
        $discount = $amount * 0.05;
    } elseif ($type == 'premium') {
        $discount = $amount * 0.10;
    } elseif ($type == 'vip') {
        $discount = $amount * 0.15;
    } else {
        $discount = 0;
    }

    return $amount - $discount;
}*/

$typeArray = ["regular", "premium", "vip"];

function calculateDiscount($type, $amount) {
    $discount = match(true) {
        $type == 'regular' => 0.05,
        $type == 'premium' => 0.1,
        $type == 'vip' => 0.15,
        default => 0,
    };

    return $amount * (1 - $discount);
}

do {
$type = readline("Please input the type: regular, premium, vip or other? ");
$type = strtolower($type);
} while (!(in_array($type, $typeArray))) ;

do {
$amount = readline("Input the amount? ");
$amount = (int)$amount;
} while (!(is_numeric($amount) && $amount > 0));

echo calculateDiscount($type, $amount);

?>