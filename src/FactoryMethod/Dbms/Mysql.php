<?php

declare(strict_types=1);

namespace FactoryMethod\Dbms;

class Mysql implements DBMSInterface
{
    public function query(): self
    {
        return $this;
    }
}