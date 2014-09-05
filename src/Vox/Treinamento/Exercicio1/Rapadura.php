<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Vox\Treinamento\Exercicio1;

/**
 * Description of Rapadura
 *
 * @author helio
 */
class Rapadura implements \Vox\Treinamento\Exercicio1\AdicionalInterface
{
    public $nome;
    
    public $valor;
    
    public function __construct( $valor) {
        $this->nome = 'Rapadura';
        $this->valor = $valor;
    }

}
