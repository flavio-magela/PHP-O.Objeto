
<?php

   // ---------------Insere Produto-----------------
function insereProduto($conexao, $produto, $preco, $descricao){
	
	$query = "insert into produtos (nome, preco, descricao) values ('{$produto}', '{$preco}', '{$descricao}')";
	return mysqli_query($conexao,$query);

}
// ---------------Lista Produto-----------------
function listaProduto($conexao){

	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from produtos");
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