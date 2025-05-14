<?php

namespace App\Helpers;

class VerificadorIdade
{
    public static function verificar(int $idade, int $idadeMin): bool
    {
        if($idade >= $idadeMin){
            return true;
        } else{
            return false;
        }
    }
}
