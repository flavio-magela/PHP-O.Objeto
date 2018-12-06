<?php
 require_once("cabecalho.php"); 
 require_once("BD-produto.php"); 
 require_once("logica-usuario.php");
 require_once("class/Produto.php");
 
?>
<?php

$id = $_POST['id'];

//operador ternário
$usado = $produto->istUsado() ? "checked='checked'" : ""; //si for usado iqual a true retorna checked se não retorna ""

$produto = buscaProduto($conexao,$id);  
$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado);

 if (removeProduto($conexao,$id)){
	?>
		<p class = "text-success">  Produto: <?= $produto->getProduto()?> no valor de R$ <?= $produto->getPreco()?>. Foi Excluido com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao Excluir o Produto <?= $produto->getProduto()?> no valor de R$ <?= $produto->getPreco()?>: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
	



 