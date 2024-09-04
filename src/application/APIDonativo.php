<?php 

declare(strict_types=1);

namespace AppCoreDonativo\application;
use AppCoreDonativo\interfaces\UseCase;
use AppCoreDonativo\usecase\TipoDonativoUseCase;

class APIDonativo {
    private UseCase $donativo;

    public function __construct(TipoDonativoUseCase $donativo) {
        $this->donativo = $donativo;
    }


    public function validaDonativo(mixed $data) : void
    {
        try {
            $this->donativo->execute($data);
        } catch(\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }   
}