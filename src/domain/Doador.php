<?php 

declare(strict_types=1);

namespace AppCoreDonativo\domain;


readonly class Doador
{
    public function __construct(
        public string $nome,
        public string $email
    ) {
    }
}