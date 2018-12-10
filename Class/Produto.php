<?php
	
	class Produto{
		private $id;
		private $nome;
		private $preco;
		private $descricao;
		private $categoria;
		private $usado;		
		private $isbn;
		private $tipoProduto;

		// --------função construtor - inicializalção de cada atributo-----------

		function __construct($nome, $preco, $descricao, Categoria $categoria, $usado) {

			$this->produto = $nome;
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
		public function getIsbn() {
        return $this->isbn;
	    }

	    public function setIsbn($isbn) {
	        $this->isbn = $isbn;
	    }

	    public function getTipoProduto() {
	        return $this->tipoProduto;
	    }   

	    public function setTipoProduto($tipoProduto) {
	        $this->tipoProduto = $tipoProduto;
	    }
		// ----------------------- fim encapsulamento---------

		 // Methodo que dá desconto nos preço dinamicamente

		public function precoComDesconto($valor = 0.1){

			if($valor > 0 && $valor <= 0.5){

				$this->preco -= $this->preco * $valor;				

			}
			return $this->preco;	
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