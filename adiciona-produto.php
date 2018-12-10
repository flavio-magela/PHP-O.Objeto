<?php 
require_once("cabecalho.php");  
require_once("logica-usuario.php");
/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

verificaUsuario();

$categoria = new Categoria();
$categoria->setId($_POST["categoria_id"]);

$nome = $_POST["nome"];
$produtoNome =$_POST["produto"] ;
$preco = $_POST["preco"];
$descricao =$_POST["descricao"];
$categoria = $categoria;
$isbn = $_POST['isbn'];
$tipoProduto = $_POST['tipoProduto'];

if(array_key_exists('usado', $_POST)){
	$usado = "true";	
} else{
	$usado = "false";
}

//instanciar o produto 
$produto = new Produto($produtoNome, $preco, $descricao, $categoria, $usado, $isbn,$tipoProduto);
$produto->setIsbn($isbn);
$produto->setTipoProduto($tipoProduto);

//instanciar o produtoDao
$produtoDao = new produtoDao($conexao);

if ($produtoDao->insereProduto($produto)){
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
