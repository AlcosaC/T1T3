<?php
use PHPUnit\Framework\TestCase;
use Calculadora;
final class CalculadoraTest extends TestCase
{
public function testSuma()
{
$calc = new Calculadora(3,4);
$this->assertEquals(7, $calc->suma());
}
public function testResta()
{
$calc = new Calculadora(3,4);
$this->assertEquals(-1, $calc->resta());
}
}
?>