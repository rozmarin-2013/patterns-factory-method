<?php

declare(strict_types=1);

namespace FactoryMethod\Dbms\Creator;

use FactoryMethod\Dbms\DBMSInterface;

interface DBMSCreatorInterface
{
    public function createDBMS(): DBMSInterface;
}