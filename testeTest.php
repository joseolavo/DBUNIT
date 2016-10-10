<?php

class testeTest extends PHPUnit_Framework_TestCase
{


     public function testSoma1()
     {
      $this->assertEquals(4, 1+ 2);
     }

     public function testSoma2()
     {
      $this->assertEquals(4, 1+3);
     }

}
