<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase; 

final class DBConnectionTest extends PHP_Unit_Framework_TestCase
{
    public function getConnection(){
        $pdo = new PDO('mysql:host=172.17.0.1:9097;dbname=sildb','root','root');
        return $this->createDefaultDBConnection($pdo, 'sildb');
    }
}
?>