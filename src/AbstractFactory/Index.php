<?php

declare(strict_types=1);

namespace AbstractFactory;

use AbstractFactory\AbstractFactory\ReportFactoryInterface;

class Index
{
    public function __invoke(ReportFactoryInterface $factory)
    {
        $orderId = 123;
        $factory->createInvoice()->getInvoice($orderId);

        $productId = 123;
        $factory->createPrice()->calculatePrice($productId);
    }
}
