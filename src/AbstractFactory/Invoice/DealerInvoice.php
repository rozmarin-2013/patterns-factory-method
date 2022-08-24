<?php

declare(strict_types=1);

namespace AbstractFactory\Invoice;

class DealerInvoice implements InvoiceInterface
{
    public function getInvoice(int $orderId): array
    {
        echo 'dealer invoice';
    }
}
