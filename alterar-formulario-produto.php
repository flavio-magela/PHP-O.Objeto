<?php
require_once("cabecalho.php");

/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

//instanciar  
$produtoDao = new produtoDao($conexao);
$categoriaDao = new categoriaDao($conexao);

$id = $_POST['id'];
$produto = $produtoDao->buscaProduto($id);
$categorias = $categoriaDao->ListaCategorias();

//operador ternário
$selecao_usado = $produto->isUsado() ? "checked='checked'" : "";
$produto->setUsado($selecao_usado);

?>

<h2 class="fa fa fa-edit titulo" > Alterando o Produto</h2> 		
	  	 
<form  action="altera-produto.php" method="POST"></br>
	<div class="form-row"> 
		 <!-- esconde o id - hidden -->
		 <div>
		 	<input   type="hidden" name="id" value="<?=$produto->getId() ?>"></br>
		 </div>	

		</div>			
		
			<?php require_once("produto-formulario-base.php") ?>

	     <!-- botão Alterar e Cancelar -->

		<div class="form-group col-sm-12">
				<button class="btn btn-primary" type="submit">Alterar</button> 
				<a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>
		</div></br>	
		<div  > 
					
			
						
		</div></br> 
</form></br>	  
<!-- Criação da Lista de Formulário  - pegando do Form produto-lista.php     -->

<table ></br>
	
		<?php 

			require_once("produto-lista.php");


		?>

</table>
	   	
<?php require_once("rodape.php"); ?>

</html>	 

