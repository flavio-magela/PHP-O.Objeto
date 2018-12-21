
<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("BD-produto.php");
/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

 $id = $_POST['id']; 

 //instanciar o produtoDao
 $produtoDao = new produtoDao($conexao);
 $produto = $produtoDao->buscaProduto($id);

 //instanciar o  categoriaDao
 $categoriaDao = new categoriaDao($conexao);
 $categorias = $categoriaDao->ListaCategorias();
 //operador ternário
 $produto->isUsado($produto->isUsado() ? "checked='checked'" : ""); //si for usado iqual a true retorna checked se não retorna ""
 
 if ($produtoDao->buscaProduto($id)){
?>			

	<div class="modal-dialog modal-md ">
		<div  class="modal-content"></br>
			<div class="modal-body">
			      	
			    <p> Deseja realmente excluir o Produto: <?= $produto->getProdutoNome()?> no valor de R$ <?= $produto->getPreco()?>?</p>
			</div>
	   		<div class="modal-footer">
				<form action="remove-produto.php" method="POST"  >						
							
					<input   type="hidden" name="id" value="<?=$produto->getId() ?>"></br>
					
		        	<button tabindex="0" class="btn btn-danger" data-trigger="focus" text-danger btn btn-link  ml-auto titulo" data-toggle="popover"  data-placement="right" >Excluir</button>
			       
			    	
			        <a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>
			  	
				</form>
			</div>
		</div>	
	</div>

<?php
	} else { 
		$msg = mysqli_error($conexao);
		?>
			<p class = "text-danger"> Erro ao Excluir o Produto <?= $produto->getProduto()?> no valor de R$ <?= $produto->getPreco()?>: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>