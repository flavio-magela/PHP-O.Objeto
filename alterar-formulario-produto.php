<?php
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("BD-produto.php");
/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

// $categoria = new Categoria();
// $categoria->getId($_POST["categoria_id"]);

$id = $_POST['id'];

//$produto = new Produto();
$produto = buscaProduto($conexao,$id);
$categorias = ListaCategorias($conexao);

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

