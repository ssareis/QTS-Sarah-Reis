<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\VerificadorString;

class VerificadorStringTest extends TestCase
{
    public function test_verifica_se_string_contem_texto()
    {
        $frase = "Eu adoro João Siles!";
        $existe = VerificadorString::verificar($frase, "Siles!");

        $this->assertTrue($existe);
    }
}




