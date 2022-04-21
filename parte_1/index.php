<?php

require __DIR__ . '/autoloader.php';

$discountCalculator = new DiscountCalculator();
echo $discountCalculator->apply(100);
