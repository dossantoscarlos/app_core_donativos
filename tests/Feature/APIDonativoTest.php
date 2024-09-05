<?php

declare(strict_types=1);
use AppCoreDonativo\application\APIDonativo;
use AppCoreDonativo\interfaces\DataRequestDonativo;


readonly class DataDonativo implements DataRequestDonativo {    
    public function __construct(
        public string $tipo,
        public int $quantidade,
        public string $nome,
        public string $descricao
    ) {}
}


test('verifica se o donativo e valido', function () {
    
    $data= new DataDonativo(
        tipo: 'a',
        quantidade: 10,
        nome: 'b',
        descricao: 'c'
    );
    
    $api_donativo = new APIDonativo;

    $api_donativo->validaDonativo($data);

    expect($api_donativo)
        ->not()
        ->toThrow(\Exception::class);

});