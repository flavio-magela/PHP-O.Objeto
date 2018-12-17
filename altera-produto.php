<?php 
 require_once("cabecalho.php");  
 /* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

$tipoProduto = $_POST['tipoProduto'];
$produto_id = $_POST['id'];
$categoria_id = $_POST['categoria_id'];

$factory = new ProdutoFactory();
$produto = $factory->criaPor($tipoProduto, $_POST);
$produto->atualizaBaseadoEm($_POST);

$produto->setId($produto_id);
$produto->getCategoria()->setId($categoria_id);

if(array_key_exists('usado', $_POST)) {
	$produto->setUsado(true);
} else {
	$produto->setUsado(false);
}

//instanciar o ProdutoDao
$produtoDao = new ProdutoDao($conexao);

if ($produtoDao->alteraProduto($produto)){
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
