<?php
class CategoriaDao{

	private $conexao;

	//-----------cosntrutor da conexão --------

	function __construct($conexao){
		$this->conexao = $conexao;
	}

   // ---------------Insere Categoria-----------------
	function insereCategoria(Categoria $categoria){
		
		$query = "insert into categorias (nome) values ('{$categoria->nome}')";
		return mysqli_query($this->conexao,$query);

	}
	// ---------------Lista Categoria-----------------
	function listaCategorias() {

	    $categorias = array();
	    $query = "select * from categorias ORDER BY nome ASC";
	    $resultado = mysqli_query($this->conexao, $query);

	    while($categoria_array = mysqli_fetch_assoc($resultado)) {

	        $categoria = new Categoria();
	        $categoria->setId($categoria_array['id']);
	        $categoria->setNome($categoria_array['nome']);

	        array_push($categorias, $categoria);
	    }

	    return $categorias;
	}

	// ---------------Remove Categoria-----------------
	function removeCategorias(Categoria $categoria){

		$query = "delete from categorias where id = {$categoria->id}";
		return mysqli_query($this->conexao, $query);

	}

}


 ?>