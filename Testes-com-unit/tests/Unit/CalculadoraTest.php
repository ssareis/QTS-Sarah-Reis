<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\Calculadora;

class CalculadoraTest extends TestCase
{
    public function test_soma_dois_numeros()
    {
        $resultado = Calculadora::somar(2, 3);
        $this->assertEquals(5, $resultado);
    }
}
