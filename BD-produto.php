
<?php

   // ---------------Insere Produto-----------------
function insereProduto($conexao, $produto, $preco, $descricao, $categoria){
	
	$query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$produto}', '{$preco}', '{$descricao}', '{$categoria}')";
	return mysqli_query($conexao,$query);

}
// ---------------Lista Produto-----------------
function listaProduto($conexao){

	$produtos = array();
	$query = "select prod.*, categ.nome as categoria_nome
	          from produtos as prod join categorias as categ
	          on categ.id=prod.categoria_id";
	$resultado = mysqli_query($conexao, $query);
	while ( $produto = mysqli_fetch_assoc($resultado)) {
		
		array_push($produtos, $produto);
	}
	return $produtos;	
}

// ---------------Remove Produto-----------------
function removeProduto($conexao, $id){

	$query = "delete from produtos where id = {$id}";
	return mysqli_query($conexao, $query);

}




?>