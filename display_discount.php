<?php

$ListPrice = $_POST["ListPrice"];
$DiscountPercent = $_POST["DiscountPercent"];
if ($DiscountPercent < 1 && $DiscountPercent > 0 && $ListPrice > 0) {
    $DiscountAmount = $ListPrice * $DiscountPercent * 0.1;
    $DiscountPrice = $ListPrice - $DiscountAmount;
    echo "DiscountAmount: $DiscountAmount " . "DiscountPrice: $DiscountPrice";
} else {
    echo "edit DiscountPercent and ListPrice (DiscountPercent<1)";
}

?>