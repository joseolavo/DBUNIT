<?php
 
class CursoTest extends PHPUnit_Extensions_Database_TestCase
{
    private $conn = null;
 
    public function getConnection()
    {
        if(!$this->conn) {
            $db = new PDO(
                "mysql:host=127.0.0.1;dbname=curso",
                "root", "");
 
            $this->conn = $this->createDefaultDBConnection($db, "curso");
        }
 
        return $this->conn;
    }
 
    public function getDataSet()
    {
        return $this->createXMLDataSet("curso_2016.xml");
    }
 
    public function testLendo()
    { 
        $conn = $this->getConnection()->getConnection();
   
        // lendo alunos
        $query = $conn->query('SELECT * FROM alunos');
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
         
        $this->assertCount(2, $results);
       $this->assertEquals('ana',$results[0]['nome']);
        $this->assertEquals('pedro',$results[1]['nome']);

        $query = $conn->query('SELECT * FROM disciplinas');
        $results = $query->fetchAll(PDO::FETCH_ASSOC);
        $this->assertEquals('Informatica',$results[0]['nome']);
 
    }
}  