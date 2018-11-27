
<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
require_once("BD-produto.php");

 $id = $_POST['id']; 
 $produto = buscaProduto($conexao,$id);

 $categorias = ListaCategorias($conexao);
  //operador ternário
 $usado = $produto ['usado']? "checked='checked'" : ""; //si for usado iqual a true retorna checked se não retorna ""
 
 if (buscaProduto($conexao,$id)){
?>			

	<div class="modal-dialog modal-md ">
		<div  class="modal-content"></br>
			<div class="modal-body">
			      	
			    <p> Deseja realmente excluir o Produto: <?= $produto['nome']?> no valor de R$ <?= $produto['preco']?>?</p>
			</div>
	   		<div class="modal-footer">
				<form action="remove-produto.php" method="POST"  >						
							
					<input   type="hidden" name="id" value="<?=$produto['id'] ?>"></br>
					
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
			<p class = "text-danger"> Erro ao Excluir o Produto <?= $produto['nome']?> no valor de R$ <?= $produto['preco']?>: <?= $msg ?>
		<?php

}
mysqli_close($conexao);

?>