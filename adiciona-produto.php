<?php 
require_once("cabecalho.php");  
require_once("BD-produto.php");
require_once("logica-usuario.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$nome = $_POST["nome"];
$produtoNome =$_POST["produto"] ;
$preco = $_POST["preco"];
$descricao =$_POST["descricao"];
$categoria = $categoria;

if(array_key_exists('usado', $_POST)){
	$usado = "true";	
} else{
	$usado = "false";
}

$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado);


if (insereProduto($conexao, $produto)){
	?>
		<p class = "text-success"> O Sr(a). <?=$nome; ?> comprou o produto <?= $produto->getProduto() ?>, no valor de R$ <?= $produto->getPreco() ?>. Produto adicionado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao inserir o produto <?= $produto->getProduto() ?>, no valor de R$ <?= $produto->getPreco() ?>. Erro inserção nos campos: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
<?php require_once ("rodape.php"); ?>
