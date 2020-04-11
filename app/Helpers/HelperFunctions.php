<?php

if (!function_exists('getPriceSale')) {
    function getPriceSale($originalPrice, $discount)
    {
        if($discount == 0) return $originalPrice;
        return ((100 - $discount) * $originalPrice) / 100;
    }
}
