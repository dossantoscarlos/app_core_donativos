<?php

declare(strict_types=1);

namespace AppCoreDonativo\usecase;

use AppCoreDonativo\domain\Donativo;
use AppCoreDonativo\infra\Logger;
use AppCoreDonativo\interfaces\DataRequestDonativo;

class TipoDonativoUseCase
{
    /**
     * @param \AppCoreDonativo\infra\dataClass\DonativoRequest $args
     * @return void
     * @throws \InvalidArgumentException
     * @throws \TypeError
     */
    public function execute(DataRequestDonativo $args): void
    {
        $properties = [
            'tipo',
            'quantidade',
            'nome',
            'descricao'
        ];

        // Verifica se todas as propriedades existem
        foreach ($properties as $property) {
            if (!property_exists($args, $property)) {
                throw new \InvalidArgumentException("A propriedade '{$property}' está faltando.");
            }
        }

        try {
            // Verifica se os tipos das propriedades são corretos
            if (!is_string($args->tipo) || !is_int($args->quantidade) || !is_string($args->nome) || !is_string($args->descricao)) {
                throw new \TypeError("Erro de tipo nas propriedades do objeto.");
            }

            $donativo = new Donativo(
                tipo: $args->tipo,
                quantidade: $args->quantidade,
                nome: $args->nome,
                descricao: $args->descricao
            );

            Logger::info(json_encode($donativo));

        } catch (\InvalidArgumentException $ex) {
            Logger::error($ex->getMessage());
            throw new \InvalidArgumentException($ex->getMessage());
        } catch (\TypeError $ex) {
            Logger::error($ex->getMessage());
            throw new \TypeError($ex->getMessage());
        } catch (\Exception $ex) {
            Logger::error($ex->getMessage());
            throw new \Exception($ex->getMessage());
        }
    }
}
