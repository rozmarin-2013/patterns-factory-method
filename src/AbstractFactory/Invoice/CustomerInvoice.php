<?php

declare(strict_types=1);

namespace AbstractFactory\Invoice;

class CustomerInvoice implements InvoiceInterface
{
    public function getInvoice(int $orderId): array
    {
        echo 'customer interface';
    }
}
