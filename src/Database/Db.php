<?php

namespace App\Database;

class Db
{
    private static ?\PDO $pdo = null;

    public static function initDb()
    {
        $params = require_once ROOT . '/config/params.php';
        self::$pdo = new \PDO("$params[driver]:host=$params[host];port=$params[port];dbname=$params[dbname]", $params['user'], $params['password']);
        return self::$pdo;
    }

    public static function lastId()
    {
        return self::$pdo->lastInsertId();
    }
}

