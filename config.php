<?php

    require 'environment.php';

    $config = [];

    if (ENVIRONMENT == 'development') {
        define('BASE_URL', 'http://localhost/projeto_classificados-MVC/');
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['user'] = 'root';
        $config['password'] = '';
    } else {
        define('BASE_URL', 'http://localhost/projeto_classificados-MVC/');
        $config['dbname'] = 'estrutura_mvc';
        $config['host'] = 'localhost';
        $config['user'] = 'root';
        $config['password'] = '';
    }

    global $pdo;
    try {
        $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['user'], $config['password']);
    } catch(PDOExeception $e) {
        die('erro -> '. $e->getMessage());
    }
