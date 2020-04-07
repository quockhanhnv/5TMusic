<?php

if (!function_exists('getPriceSale')) {
    function getPriceSale($originalPrice, $discount)
    {
        return ((100 - $discount) * $originalPrice) / 100;
    }
}
