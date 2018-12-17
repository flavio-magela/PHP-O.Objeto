<?php
	
	abstract class Produto{
		private $id;
		private $produtoNome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;	

		// --------função construtor - inicializalção de cada atributo-----------

		function __construct($produtoNome, $preco, $descricao, Categoria $categoria, $usado) {

			$this->produto = $produtoNome;
			$this->preco = $preco;
			$this->descricao = $descricao;
			$this->categoria = $categoria;
			$this->usado = $usado;

		}

		
		// -------------Encapsulamento-------------------

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}
		public function getProduto(){
			return $this->produto;
		}
		
		public function getPreco(){
			return $this->preco;
		}
		// public function setPreco($preco){		não será mais utilizada, caso utilizaremos a função contrutor de inicialização.	

		// 		$this->preco = $preco;			
			
		// }
		public function getDescricao(){
			return $this->descricao;
		}
		
		public function getCategoria(){
			return $this->categoria;
		}
		
		public function isUsado(){
			return $this->usado;
		}
		public function setUsado($usado){
			$this->usado = $usado;
		}
		
	    
		// ----------------------- fim encapsulamento---------

		 // Methodo que dá desconto nos preço dinamicamente

		public function precoComDesconto($valor = 0.1){

			if($valor > 0 && $valor <= 0.5){

				$this->preco -= $this->preco * $valor;				

			}
			return $this->preco.".00";	
		}
		// ------------- Methodo is livro, verifica se é um livro-----------
		public function temIsbn(){

			return $this instanceof Livro;

		}
		public function temTaxaImpressao(){

    		return $this instanceof LivroFisico;

    	}
    	public function temWaterMark(){

    		return $this instanceof Ebook;

    	}
		abstract function atualizaBaseadoEm($params); //abstract -obrigatoriamente as classes filhas tem que implementar esse methodo.


		// -- Methodo calcula Imposto sobre o produto - Polimorfismo usando o mesmo metoto na classe Livro  -Polimorfismo é reescrita do methodo - usado o mais proximo, ou seja a mais específica da classe --
		public function calculaImposto(){

			 // imposto sobre qualquer produto 1.95%, menos livros...

				return $this->preco * 0.195;			
			
		}

		// ------- exibir o produto como string para impressão(ex. echo)--------------

		function __toString() {
			
			return $this->nome.": R$ ".$this->preco;	
		}

		/*---- metodo chamado na hora que o produto é destruido.  usado mais para conexão com o banco de dados ou encerrar a comunicação com algum serviço externo 

		function _destruct (){
			echo "Produto destruido";
		}----------*/
	}


 ?>