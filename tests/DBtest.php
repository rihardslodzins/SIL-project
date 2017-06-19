<?php

use PHPUnit\Framework\TestCase; 

abstract class DB_Connection_Test extends TestCase
{

static private $pdo= null;
private $conn = null;


final public function getConnection()
{
    if ($this->conn === null)
    {
        if (self::$pdo == null)
        {
            self::$pdo = new PDO( $GLOBALS['DB_DSN'], $GLOBALS['DB_USER'], $GLOBALS['DB_PASSWD'] );
        }
        $this->conn = $this->createDefaultDBConnection(self::$pdo, $GLOBALS['DB_DBNAME']);
    }
    return $this->conn;
}

protected function getPdo()
{
    return $this->getConnection()->getConnection();
}

}
?>