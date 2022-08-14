<?php

declare(strict_types=1);

namespace AbstractFactory\AbstractFactory;

use AbstractFactory\Invoice\DealerInvoice;
use AbstractFactory\Invoice\InvoiceInterface;
use AbstractFactory\Price\DealerPrice;
use AbstractFactory\Price\PriceInterface;

class DealerReportFactory implements ReportFactoryInterface
{

    public function createPrice(): PriceInterface
    {
        return new DealerPrice();
    }

    public function createInvoice(): InvoiceInterface
    {
        return new DealerInvoice();
    }
}
