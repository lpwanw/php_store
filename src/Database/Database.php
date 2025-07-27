<?php

namespace App\Database;

use PDO;
use PDOException;
use App\Services\Logger;

class Database
{
    private static ?PDO $connection = null;
    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            try {
                $dbPath = __DIR__ . '/../../database/store.sqlite';
                $dbDir = dirname($dbPath);
                
                if (!is_dir($dbDir)) {
                    mkdir($dbDir, 0755, true);
                }
                
                self::$connection = new PDO("sqlite:$dbPath");
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                
                // Enable foreign key constraints
                self::$connection->exec('PRAGMA foreign_keys = ON;');
            } catch (PDOException $e) {
                throw new \Exception("Database connection failed: " . $e->getMessage());
            }
        }
        
        return self::$connection;
    }
    
    public static function query(string $sql, array $params = []): \PDOStatement
    {
        $logger = Logger::getInstance();
        $logger->info($sql);
        $stmt = self::getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    
    public static function execute(string $sql, array $params = []): bool
    {
        $logger = Logger::getInstance();
        $logger->info($sql);
        return self::query($sql, $params)->rowCount() > 0;
    }
}
