<?php
 require_once("cabecalho.php"); 
 require_once("BD-produto.php"); 
 require_once("logica-usuario.php");
 require_once("class/Produto.php");
?>
<?php

$produto = new Produto();
$produto = buscaProduto($conexao,$id);

$id = $_POST['id'];
 if (removeProduto($conexao,$id)){
	?>
		<p class = "text-success">  Produto <?= $produto->produto ?> no valor de R$ <?= $produto->preco?>. Foi Excluido com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao Excluir o Produto <?= $produto->nome?> no valor de R$ <?= $produto->preco?>: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
	



 