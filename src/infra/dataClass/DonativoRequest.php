<?php 

declare(strict_types=1);

namespace AppCoreDonativo\infra\dataClass;
use AppCoreDonativo\interfaces\DataRequestDonativo;


class DonativoRequest implements DataRequestDonativo {
    public function __construct(
        public string $tipo,
        public int $quantidade,
        public string $nome,
        public string $descricao
    ) {}
}