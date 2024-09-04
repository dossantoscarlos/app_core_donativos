<?php 

declare(strict_types=1);

namespace AppCoreDonativo\domain;

readonly class Donativo {

    public function __construct(
       public string $tipo,
       public string $quantidade,
       public string $nome,
       public string $descricao
    ){

    }
}