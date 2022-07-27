<?php

declare(strict_types=1);

namespace FactoryMethod;

use FactoryMethod\Dbms\Creator\DBMSCreatorInterface;
use FactoryMethod\Dbms\Creator\MysqlCreator;
use FactoryMethod\Dbms\Creator\PostgresCreator;
use \Exception;

class Index
{
    static public function createDatabaseManagementSystem(string $type): DBMSCreatorInterface
    {
        switch ($type){
            case 'mysql':
                return new MysqlCreator();
            case 'postgres':
                return new PostgresCreator();
            default:
                throw new Exception('Unsupport type dbms');
        }
    }
}