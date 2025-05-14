<?php

namespace App\Helpers;

class VerificadorString
{
    public static function verificar(string $texto, string $busca): bool
    {
        return str_contains($texto, $busca);
    }
}
