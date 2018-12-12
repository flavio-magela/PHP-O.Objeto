<?php

abstract class Livro extends Produto {

    private $isbn;

    public function getIsbn() {
        return $this->isbn;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }

    

    // ----- Methodo calcula Imposto sobre o produto - Polimorfismo usando o mesmo metoto na classe Produto- Polimorfismo é reescrita do methodo - usado o mais proximo, ou seja a mais específica da classe --

		public function calculaImposto(){

			 // se for um livro, imposto de 0.65%

				return $this->getPreco() * 0.065;			
			
		}
}

?>