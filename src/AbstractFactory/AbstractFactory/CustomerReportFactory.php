<?php

declare(strict_types=1);

namespace AbstractFactory\AbstractFactory;

use AbstractFactory\Invoice\CustomerInvoice;
use AbstractFactory\Invoice\InvoiceInterface;
use AbstractFactory\Price\CustomerPrice;
use AbstractFactory\Price\PriceInterface;

class CustomerReportFactory implements ReportFactoryInterface
{

    public function createPrice(): PriceInterface
    {
        return new CustomerPrice();
    }

    public function createInvoice(): InvoiceInterface
    {
       return new CustomerInvoice();
    }
}
