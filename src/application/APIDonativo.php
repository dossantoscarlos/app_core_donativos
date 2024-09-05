<?php 

declare(strict_types=1);

namespace AppCoreDonativo\application;

use AppCoreDonativo\infra\Logger;
use AppCoreDonativo\interfaces\DataRequestDonativo;
use AppCoreDonativo\usecase\TipoDonativoUseCase;

class APIDonativo {
    /**
     * @param \AppCoreDonativo\infra\dataClass\DonativoRequest $data
     * @throws \Exception
     * @return void
     */
    public function validaDonativo(DataRequestDonativo $data) : void
    {
        try {
            $donativo = new TipoDonativoUseCase;
            $donativo->execute($data);
        } catch(\Exception $ex) {
            Logger::error($ex->getMessage());
            throw new \Exception($ex->getMessage());
        }
    }   
}