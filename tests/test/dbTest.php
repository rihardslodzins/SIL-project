<?php
use PHPUnit\Framework\TestCase; 
class FixtureTestCase extends PHPUnit_Extensions_Database_TestsCase {
    private $conn = null;

    public function getConnection(){
        if ($this->conn === null){
            try {
                $pdo = new PDO('mysql:host=db;dbname=sildb','root','root');
                $this->conn = $this->createDefaultDBConnection($pdo, 'sildb');
            }catch (PDOException $e){
                echo $e->getMessage();
            }
        }
        return $this->conn;
    }
}
