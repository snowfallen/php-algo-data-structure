<?php

namespace PhpAlgoDataStructure\Patterns\Singleton;

use Exception;
use PDO;

class DatabaseConnection
{
    private static DatabaseConnection $instance;
    private PDO $connection;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=mydatabase', 'username', 'password');
    }

    /**
     * @return DatabaseConnection
     */
    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }

        return self::$instance;
    }

    /**
     * @return PDO
     */
    final public function getConnection(): PDO
    {
        return $this->connection;
    }

    /**
     * @return void
     */
    private function __clone(): void {}

    /**
     * @return void
     * @throws Exception
     */
    private function __wakeup(): void
    {
        throw new \RuntimeException("Deserialization of singleton is not allowed.");
    }
}
