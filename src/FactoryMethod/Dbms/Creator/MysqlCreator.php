<?php

declare(strict_types=1);

namespace FactoryMethod\Dbms\Creator;

use FactoryMethod\DBMS\Mysql;

class MysqlCreator implements DBMSCreatorInterface
{
    public function createDBMS(): Mysql
    {
        echo 'create Mysql';

        return new Mysql();
    }
}