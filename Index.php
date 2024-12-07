<?php

function calculateDiscount($type, $amount) {
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
}
echo calculateDiscount('regular', 1000);
echo "\n";
echo calculateDiscount('premium', 2000);
echo "\n";
echo calculateDiscount('vip', 3000);
echo "\n";
echo calculateDiscount('other', 500);
?>

?>