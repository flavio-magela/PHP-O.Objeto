<?php

   // ---------------Insere Produto-----------------
function insereCategoria($conexao, $nome){
	
	$query = "insert into categorias (nome) values ('{$nome}')";
	return mysqli_query($conexao,$query);

}
// ---------------Lista Produto-----------------
function listaCategorias($conexao){

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

	$query = "delete from categorias where id = {$id}";
	return mysqli_query($conexao, $query);

}