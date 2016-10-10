<?php
namespace PHPUnit;
 
class CalculoTest extends \PHPUnit_Framework_TestCase
{
        public function setUp()
        {
                // executado antes de cada um dos testes dessa classe
        }
 
        public function tearDown()
        {
                // executado apos cada um dos testes dessa classe
        }
 
        function testSoma()
        {
                $calculo = new \PHPUnit\Calculo();
 
                $this->assertEquals(19, $calculo->soma(10, 5, 4));
                $this->assertEquals(12, $calculo->soma(2, 2, 2, 6));
        }
}