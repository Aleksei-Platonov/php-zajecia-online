<?php

declare(strict_types=1);

namespace App;

use Exception;
use PDO;
use PDOException;

class Database
{
    public function __construct(array $config)
    {
        try {
            $dsn = "mysql:dbname={$config['database']};host={$config['host']}";
            $connection = new PDO('ssssss');
        } catch (PDOException $e) {
            throw new AppException('Błąd w połączeniu z bazą danych');
        }
    }
}