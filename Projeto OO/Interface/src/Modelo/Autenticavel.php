<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
   public function autentica(String $senha): bool;

}
