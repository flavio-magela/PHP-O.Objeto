

<?php include("cabecalho.php");
include ("conecta.php");
include("BD-categoria.php");

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
				<td>					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

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
</div>	
      
</form>	   
	   	
<?php include("rodape.php"); ?>

</html>