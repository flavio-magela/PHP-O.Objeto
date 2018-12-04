<?php 
 require_once("cabecalho.php"); 
 require_once("BD-produto.php");
 require_once("class/Produto.php");
 require_once("class/Categoria.php");

$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);


$produto = new Produto();
$produto->setId($_POST["id"]);
$nome = $_POST["nome"];
$produto->setProduto($_POST["produto"]);
$produto->setPreco($_POST["preco"]);
$produto->setDescricao($_POST["descricao"]);
$produto->setCategoria($categoria);

if(array_key_exists('usado', $_POST)){
	$produto->setUsado("true");	
} else{
	$produto->setUsado("false");
}

if (alteraProduto($conexao, $produto)){
	?>
		<p class = "text-success"> O Produto <?= $produto->getProduto() ?>, no valor de R$ <?= $produto->getPreco() ?>. Foi alterado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao alterar o produto:<?= $produto->getProduto() ?>. Erro: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
<?php require_once ("rodape.php"); ?>
