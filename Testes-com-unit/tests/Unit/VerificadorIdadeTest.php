<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Helpers\VerificadorIdade;

class VerificadorIdadeTest extends TestCase
{
    public function test_verifica_se_Idade_e_maior_que_a_minima()
    {
        $idade = 21;
        $verifica = VerificadorIdade::verificar($idade, 18);

        $this->assertTrue($verifica);
    }
}




