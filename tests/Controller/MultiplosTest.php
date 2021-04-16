<?php

namespace Controller\Tests;

use PHPUnit\Framework\TestCase;
use Api\Controller\Multiplos;

class MultiplosTest extends TestCase
{

    public function testSuccessReturnInteger()
    {
        $multiplos = new Multiplos();
        $this->assertIsNumeric($multiplos->testNumbers(11));
        $this->assertIsNumeric($multiplos->testNumbers(21));
        $this->assertIsNumeric($multiplos->testNumbers(33));
        $this->assertIsNumeric($multiplos->testNumbers(45));
        $this->assertIsNumeric($multiplos->testNumbers(56));
        $this->assertIsNumeric($multiplos->testNumbers(99));
        $this->assertIsNumeric($multiplos->testNumbers(100));
    }

    public function testSuccessReturnString()
    {
        $multiplos = new Multiplos();
        $this->assertIsString($multiplos->testNumbers(10));
        $this->assertIsString($multiplos->testNumbers(20));
        $this->assertIsString($multiplos->testNumbers(30));
        $this->assertIsString($multiplos->testNumbers(40));
        $this->assertIsString($multiplos->testNumbers(50));
        $this->assertIsString($multiplos->testNumbers(60));
        $this->assertIsString($multiplos->testNumbers(70));
        $this->assertIsString($multiplos->testNumbers(80));
        $this->assertIsString($multiplos->testNumbers(90));
        $this->assertIsString($multiplos->testNumbers(100));
    }

    public function testSuccessReturnNames()
    {
        $multiplos = new Multiplos();
        $this->assertEquals('BHUT', $multiplos->testNumbers(9));
        $this->assertEquals('BHUT', $multiplos->testNumbers(12));
        $this->assertEquals('IT', $multiplos->testNumbers(20));
        $this->assertEquals('IT', $multiplos->testNumbers(55));
        $this->assertEquals('BHUT TI', $multiplos->testNumbers(30));
        $this->assertEquals('BHUT TI', $multiplos->testNumbers(60));
    }
}