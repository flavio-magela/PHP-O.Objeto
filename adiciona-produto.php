<?php include("cabecalho.php");?>
<?php

function insereProduto($conexao, $produto, $preco){
	
	$query = "insert into produtos (nome, preco) values ('{$produto}', {$preco})";
	return mysqli_query($conexao,$query);

}

$nome = $_GET["nome"];
$produto = $_GET["produto"];
$preco = $_GET["preco"];

$conexao = mysqli_connect('localhost', 'root', '', 'loja');


if (insereProduto($conexao, $produto, $preco)){
	?>
		<p class = "alert-success"> O Sr. <?=$nome; ?> comprou o produto <?= $produto; ?>, Custa R$ <?= $preco; ?>. Produto adicionado com sucesso!
	<?php
	} else { 
		?>
			<p class = "alert-danger"> Erro ao inserir o Produto. Erro na conexão ou ao inserção nos campos!
		<?php
};
mysqli_close($conexao);

?>
<?php include ("rodape.php"); ?>
