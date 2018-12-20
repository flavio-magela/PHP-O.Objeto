<?php 
require_once("cabecalho.php");  
require_once("logica-usuario.php");
/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

verificaUsuario();
$nome = $_POST['nome'];
$produtoNome = $_POST['produto'];
$tipoProduto = $_POST['tipoProduto'];
$categoria_id = $_POST["categoria_id"];

//instanciar o produtoFactory()
$factory = new ProdutoFactory();
$produto = $factory->criaPor($tipoProduto, $_POST);
$produto->atualizaBaseadoEm($_POST);
$produto->getCategoria()->setId($categoria_id);


if(array_key_exists('usado', $_POST)){
	$produto->setUsado("true");	
} else{
	$produto->setUsado("false");
}
//instanciar o produtoDao
$produtoDao = new produtoDao($conexao);

if ($produtoDao->insereProduto($produto)){
	?>
		<p class = "text-success"> O Sr(a). <?=$nome; ?> comprou o produto <?= $produto->getProdutoNome() ?>, no valor de R$ <?= $produto->getPreco() ?>. Produto adicionado com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao inserir o produto <?= $produto->getProdutoNome() ?>, no valor de R$ <?= $produto->getPreco() ?>. Erro inserção nos campos: <?= $msg ?>
		<?php

		}
mysqli_close($conexao);
		?>

<?php require_once ("rodape.php"); ?>