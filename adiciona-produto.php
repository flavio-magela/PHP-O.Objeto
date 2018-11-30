<?php 
require_once("cabecalho.php");  
 require_once("BD-produto.php");
 require_once("logica-usuario.php");
 require_once("class/Produto.php");
 require_once("class/Categoria.php");

verificaUsuario();

$produto = new Produto();
$categoria = new Categoria();
$categoria->id = $_POST["categoria_id"];

$nome = $_POST["nome"];
$produto->produto = $_POST["produto"];
$produto->preco = $_POST["preco"];
$produto->descricao = $_POST["descricao"];
$produto->categoria = $categoria;

if(array_key_exists('usado', $_POST)){
	$produto->usado = true;	
} else{
	$produto->usado = false;
}


if (insereProduto($conexao, $produto)){
	?>
		<p class = "text-success"> O Sr(a). <?=$nome; ?> comprou o produto <?= $produto->produto; ?>, no valor de R$ <?= $produto->preco; ?>. Produto adicionado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao inserir o Produto. Erro inserção nos campos: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
<?php require_once ("rodape.php"); ?>
