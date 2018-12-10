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

$nome = $_POST["produto"];
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
if($tipoProduto == "Livro") {
    $produto = new Livro($nome, $preco, $descricao, $categoria, $usado, $tipoProduto);
    $produto->setIsbn($isbn);    
} else {
    $produto = new Livro($nome, $preco, $descricao, $categoria, $usado, $tipoProduto);
} 

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
