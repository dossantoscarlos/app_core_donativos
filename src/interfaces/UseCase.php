<?php 

declare(strict_types=1);

namespace AppCoreDonativo\interfaces;

interface UseCase
{
    public function execute(mixed &$args): void;
}
