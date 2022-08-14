<?php

declare(strict_types=1);

namespace AbstractFactory\Price;

class CustomerPrice implements PriceInterface
{
    public function calculatePrice(int $productId): float
    {
        echo 'calc for customer';
    }
}
