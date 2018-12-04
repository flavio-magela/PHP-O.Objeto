<?php
require_once("class/Categoria.php");
require_once('conecta.php');

   // ---------------Insere Produto-----------------
function insereCategoria($conexao, Categoria $categoria){
	
	$query = "insert into categorias (nome) values ('{$categoria->nome}')";
	return mysqli_query($conexao,$query);

}
// ---------------Lista Produto-----------------
function listaCategorias($conexao) {

    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);

    while ($categoria_array = mysqli_fetch_assoc($resultado)) {

        $categoria = new Categoria();
        $categoria->SetId($categoria_array['id']);
        $categoria->SetNome($categoria_array['nome']);

        array_push($categorias, $categoria);
    }

    return $categorias;
}

// ---------------Remove Produto-----------------
function removeCategorias($conexao, Categoria $categoria){

	$query = "delete from categorias where id = {$categoria->id}";
	return mysqli_query($conexao, $query);

}