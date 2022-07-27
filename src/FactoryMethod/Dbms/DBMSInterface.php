<?php

declare(strict_types=1);

namespace FactoryMethod\Dbms;

interface DBMSInterface
{
    public function query(): self;
}