<?php 
 
$notebook = "Springfield";
$price = 75.00;
$quantity = 10;
$currency = "Php";
$extra = 2;

function sale(string $notebook, float $price, int $quantity, string $currency, int $extra) {
    return "Buy $notebook Notebooks starting at $price $currency, buy $quantity only for " . $price * $quantity . 
    " " . $currency . " and get $extra ";
}

echo sale($notebook, $price, $quantity, $currency, $extra);
?>