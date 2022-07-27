<?php
require '../vendor/autoload.php';

use FactoryMethod\Index;

$creator = Index::createDatabaseManagementSystem('mysql');

$creator->createDBMS();