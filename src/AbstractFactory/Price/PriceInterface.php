<?php

declare(strict_types=1);

namespace AbstractFactory\Price;

interface PriceInterface
{
    public function calculatePrice(int $productId): float;
}
