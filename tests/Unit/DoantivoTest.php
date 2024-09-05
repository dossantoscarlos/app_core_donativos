<?php 

use AppCoreDonativo\domain\Donativo;
use AppCoreDonativo\infra\Logger;

test('retorno dos dados da classe donativo', function () { 
    $donativo  = new Donativo(tipo: 'a', quantidade: 1, nome: 'b', descricao: 'c');
   
    Logger::info(json_encode($donativo));
   
    expect("a")->toBe($donativo->tipo);
    expect(1)->toBe($donativo->quantidade);
    expect("b")->toBe($donativo->nome);
    expect("c")->toBe($donativo->descricao);

});