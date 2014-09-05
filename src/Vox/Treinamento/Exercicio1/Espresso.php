<?php

namespace Vox\Treinamento\Exercicio1;

use Easy\Collections\ArrayList;

/**
 * Description of Cafe
 *
 * @author helio
 */
class Espresso implements \Vox\Treinamento\Exercicio1\CafeInterface
{	
	/**
	 * @var ArrayList
	 */
	public $adicionais;
	
	public $preco;
	
	
	public function __construct($preco) 
	{
		$this->nome = 'Espresso';
		$this->preco = $preco;
		$this->adicionais = new ArrayList();
	}
	
	public function addAdicional(\Vox\Treinamento\Exercicio1\AdicionalInterface $adicional)
	{
		$this->adicionais->add($adicional);
	}
	
	
	public function printAdicional() 
	{
		$descricaoAdicional = "";
		foreach ($this->adicionais as $adicional)
		{
			$descricaoAdicional .= 'Adicional: ' . $adicional->nome . ' Valor: R$ ' . $adicional->valor . PHP_EOL;
		}
		return $descricaoAdicional;
	}
	
	public function getValorCafe(){
		return $this->preco;
	}
	
	public function getPrecoTotal(){
		$precoTotal = 0;
		$valorAdicional = 0;
		
		foreach ($this->adicionais as $adicional) {
			$valorAdicional += $adicional->valor;
		}
		return $precoTotal = $valorAdicional + $this->preco;
	}
	
	public function toString()
	{
		$valorAdicional = 0;
		$precoTotal = 0;
		foreach ($this->adicionais as $adicional) {
			$valorAdicional += $adicional->valor;
		}
		$precoTotal = $this->preco + $valorAdicional;
		return 'Descrição do Café: ' . $this->nome . PHP_EOL .
				'Preço do Café: R$ ' . $this->preco	. PHP_EOL .
				$this->printAdicional().
				'Preço Total: R$' . $this->getPrecoTotal() .PHP_EOL;
						
	}
	
}