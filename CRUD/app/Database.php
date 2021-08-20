<?php

abstract class Database {

    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO(
            'mysql:host=localhost;dbname=dev_crud1',
            'root',
            'root'
        );
    }

}