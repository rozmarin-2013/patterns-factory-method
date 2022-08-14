<?php

declare(strict_types=1);

namespace AbstractFactory\AbstractFactory;

use AbstractFactory\Invoice\InvoiceInterface;
use AbstractFactory\Price\PriceInterface;

interface ReportFactoryInterface
{
    public function createPrice(): PriceInterface;

    public function createInvoice(): InvoiceInterface;
}
