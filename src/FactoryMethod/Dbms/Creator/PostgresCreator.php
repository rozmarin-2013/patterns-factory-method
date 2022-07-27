<?php

declare(strict_types=1);

namespace FactoryMethod\Dbms\Creator;

use FactoryMethod\DBMS\Postgres;

class PostgresCreator implements DBMSCreatorInterface
{
    public function createDBMS(): Postgres
    {
        echo 'create Mysql';

        return new Postgres();
    }
}