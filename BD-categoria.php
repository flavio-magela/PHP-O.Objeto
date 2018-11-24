<?php

   // ---------------Insere Produto-----------------
function insereCategoria($conexao,  $nome){
	
	$sqlInj = mysqli_real_escape_string($conexao,$sqlInj);
	$query = "insert into categorias (nome) values ('{$nome}')";
	return mysqli_query($conexao,$query);

}
// ---------------Lista Produto-----------------
function listaCategorias($conexao){

	$sqlInj = mysqli_real_escape_string($conexao,$sqlInj);
	$categorias = array();
	$query = "select * from categorias order by nome ASC";
	$resultado = mysqli_query($conexao, $query);
	while ( $categoria = mysqli_fetch_assoc($resultado)) {
		
		array_push($categorias, $categoria);
	}
	return $categorias;	
}

// ---------------Remove Produto-----------------
function removeCategorias($conexao, $id){

	$sqlInj = mysqli_real_escape_string($conexao,$sqlInj);
	$query = "delete from categorias where id = {$id}";
	return mysqli_query($conexao, $query);

}