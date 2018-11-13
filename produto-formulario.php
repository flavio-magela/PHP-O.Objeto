

<?php include("cabecalho.php");
include ("conecta.php");
include("BD-categoria.php");
include("BD-produto.php");

$categorias = ListaCategorias($conexao);

?>

<h2 class="fa fa-list-alt titulo" > Formulário de Produto</h2> 		
	  	 
<form  action="adiciona-produto.php" method="POST">
	<div class="form-row"> 
		<div class="form-group col-sm-5">
			<label class="alinhar">Nome  </label><input   type="text" class="form-control" name="nome" /></br>
		</div>	
		<div class="form-group col-sm-4">
			<label class="alinhar">Produto</label><input  type="text" class="form-control" name="produto" /></br>
		</div>	
		<div class="form-group col-sm-3">
			<label class="alinhar">Preço  </label> <input type="number" class="form-control" name="preco" /></br>
		</div>	
		<div class="form-group col-sm-7">
			<label class="alinhar">Descrição  </label> <textarea name="descricao" class="form-control"></textarea></br>
		</div>

		   <!-- campo ckeckbox -->
		<div class="form-group col-sm-1">
			<label class="alinhar">Usado</label> <input type="checkbox" class="form-control" name="usado" value="true" /></br>
		</div>

		<table>
			<tr>
				<label class="form-group col-sm-1">Categoria</label>
				<td>	
					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : ?>

						  <option value="<?= $categoria['id'] ?>"> <?= $categoria['nome']?></option>  

						<?php endforeach ?>

					</select>				

				</td>

				<!-- Criação da Categoria com Radio - compo de Bolinha para seleção -->

				<!-- <td>
					<?php foreach ($categorias as $categoria) : ?>

					  <input  type="radio" name="categoria_id" value="<?= $categoria['id'] ?>"> <?= $categoria['nome']?></br>

					<?php endforeach ?>

				</td> -->

			</tr>

		</table>
		
	</div> 	
	                 
<div class="form-group col-sm-12">
	<button class="btn btn-primary" type="submit">Cadastrar</button> 
</div></br>	      
</form></br></br>
<?php
	if(array_key_exists("removido",$_GET) && $_GET["removido"]=="true"){

?>
		<p class="alert-success" > Produto excluido com sucesso.</p>

<?php
	
     set_time_limit(10);

	}

?>
 <table class="table table-striped table-bordered"> 
 	<h2 class="fa fa-list-alt titulo" > Lista de Produtos</h2> </br>
 	<tr></br>			
	        <th class=" titulo1">Produto</th>
	        <th class=" titulo1">Preço</th>
	        <th class=" titulo1">Descrição</th>
	        <th class=" titulo1">Usado</th>
	        <th class=" titulo1">Categoria</th>
	        <th class=" titulo1">Alterar</th>
	        <th class="titulo1">Excluir</th>
	          
	</tr>	
	<?php
	$produtos =listaProduto($conexao);
	foreach ($produtos as $produto) :
	?>		
		<tr>			
			<td ><?= $produto['nome']?></td>
			<td >R$ <?= $produto['preco']?></td>
			<td ><?= substr($produto['descricao'], 0, 40)?></td>
			<td ><?= $produto['usado']?></td>
			<td ><?= $produto['categoria_nome']?></td>	
			<td>
				<form action="alterar-formulario-produto.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto['id']?>">
					<button tabindex="0" class=" fa fa-edit btn btn-link  ml-auto titulo2" aria-hidden="true" data-toggle="popover"  data-placement="right" data-trigger="focus" title="alterar" type="Submit" id="btn-alterar"></button>
				</form>
				
			</td>		
			<td>
				<form action="remove-produto.php" method="POST"  >
					<input  type="hidden" name="id" value="<?= $produto['id']?>">
					<button tabindex="0" class=" fas fa-trash-alt text-danger btn btn-link  ml-auto titulo" data-toggle="popover"  data-placement="right" data-trigger="focus" title="Excluir" type="Submit" id="btn-excluir"></button>
				</form>
				
			</td>

		</tr>
	<?php	
	endforeach

	?>
</table>

	   	
<?php include("rodape.php"); ?>

</html>