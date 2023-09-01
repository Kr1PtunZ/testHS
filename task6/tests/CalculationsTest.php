<?php
namespace tesths\task6\tests;
use PDO;
use PHPUnit\Framework\TestCase;
use tesths\task6\Calculations\Calculations;

class CalculationsTest extends TestCase{
 private Calculations $object;

 protected  function setUp(): void
 {
    $this -> $object = new Calculations();
 }
 public function testGetCalculate():void{

 }
}