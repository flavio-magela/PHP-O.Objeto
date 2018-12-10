<?php
 require_once("cabecalho.php"); 
 require_once("logica-usuario.php");
 /* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 
 
?>
<?php

$id = $_POST['id'];

//instanciar o produtoDao
$produtoDao = new produtoDao($conexao);

 if ($produtoDao->removeProduto($id)){ 
	?>
		<p class = "text-success">  
			Produto foi Excluido com sucesso!
		<li><a class="btn btn-primary" href="produto-formulario.php">OK</a></li>

	<?php
	} else { 	
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao Excluir o Produto: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>
	



 