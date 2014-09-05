<?php
namespace Vox\Treinamento\Exercicio1;

use Easy\Collections\ArrayList;



class Pedido {
	
	/**
	 * 
	 * @var unknown
	 */
	protected $nuPedido;
	
	/**
	 * @var ArrayList;
	 */
	public  $cafes;
	
	
	public function __construct($nuPedido) 
	{
		$this->nuPedido = $nuPedido;
		$this->cafes = new ArrayList();
	}
	
	public function addPedido(\Vox\Treinamento\Exercicio1\CafeInterface $cafe){
		$this->cafes->add($cafe);
	}
        
        public function toString()
        {
            $print = "";
            foreach ($this->cafes as $cafe){
                $print .= $cafe->toString();
            }
            return $print;
        }
        
	
	
}
