<?php

use PHPUnit\Framework\TestCase;
include './src/Coche.php';

class cocheTest extends TestCase {

   public function testReposta() {
       
      $objeto = new Coche("Ferrari", "petroleo", 50, 0);
      $this->assertEquals(100, $objeto->reposta(50));
   }
   public function testCircula() {
      $objeto = new Coche("FiatPanda","Electrico",200,5);
      $this->assertEquals(100,$objeto->circula(100));
   }

       
}


?>