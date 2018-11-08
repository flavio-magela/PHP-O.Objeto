<?php include("cabecalho.php");
 include("conecta.php"); 
 include("BD-produto.php");


$nome = $_POST["nome"];
$produto = $_POST["produto"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];


if (insereProduto($conexao, $produto, $preco, $descricao)){
	?>
		<p class = "text-success"> O Sr(a). <?=$nome; ?> comprou o produto <?= $produto; ?>, no valor de R$ <?= $preco; ?>. Produto adicionado com sucesso!
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
<?php include ("rodape.php"); ?>
