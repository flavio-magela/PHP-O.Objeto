<?php
require_once("conecta.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

function listaProdutos($conexao) {

	$produtos = array();
	$resultado = mysqli_query($conexao, "select p.*,c.nome as categoria_nome 
		from produtos as p join categorias as c on c.id=p.categoria_id");

	while($produto_array = mysqli_fetch_assoc($resultado)) {

		$categoria = new Categoria();
		$categoria->setNome($produto_array['categoria_nome']);
		
		$produtoNome = $produto_array['nome'];
		$descricao = $produto_array['descricao'];
		$categoria = $categoria;
		$preco = $produto_array['preco'];
		$usado = $produto_array['usado'];

		$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado);
		$produto->setId($produto_array['id']);

		array_push($produtos, $produto);
	}

	return $produtos;
}

function insereProduto($conexao, Produto $produto) {

	$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) 
		values ('{$produto->getProduto()}', {$produto->getPreco()}, '{$produto->getDescricao()}', 
			{$produto->getCategoria()->getId()}, {$produto->getUsado()})";

	return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, Produto $produto) {

	$query = "update produtos set nome = '{$produto->getProduto()}', 
		preco = {$produto->getPreco()}, descricao = '{$produto->getDescricao()}', 
			categoria_id= {$produto->getCategoria()->getId()}, 
				usado = {$produto->getUsado()} where id = '{$produto->getId()}'";

	return mysqli_query($conexao, $query);

}

function buscaProduto($conexao, $id) {

	$query = "select * from produtos where id = {$id}";
	$resultado = mysqli_query($conexao, $query);
	$produto_buscado = mysqli_fetch_assoc($resultado);

	$categoria = new Categoria();
	$categoria->setId($produto_buscado['categoria_id']);

	$produtoNome = $produto_array['nome'];
	$descricao = $produto_array['descricao'];
	//$categoria = $categoria;
	$preco = $produto_array['preco'];
	$usado = $produto_array['usado'];

	$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado);
	$produto->setId($produto_array['id']);

	return $produto;
}

function removeProduto($conexao, $id) {

	
	$produto->getId($produto_buscado['id']);
	$produto->getProduto($produto_buscado['nome']);
	$produto->getPreco($produto_buscado['preco']);
	$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado);

	$query = "delete from produtos where id = {$id}";

	return mysqli_query($conexao, $query);
}