<?php

declare(strict_types=1);

namespace AbstractFactory\Invoice;

interface InvoiceInterface
{
    public function getInvoice(int $orderId): array;
}
