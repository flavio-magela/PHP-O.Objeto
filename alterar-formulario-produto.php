

<?php include("cabecalho.php");
include ("conecta.php");
include("BD-categoria.php");
include("BD-produto.php");

$id = $_POST['id'];
$produto = buscaProduto($conexao,$id);
$categorias = ListaCategorias($conexao);
//operador ternário
$usado = $produto ['usado']? "checked='checked'" : ""; //si for usado iqual a true retorna checked se não retorna ""
?>

<h2 class="fa fa fa-edit titulo" > Alterando o Produto</h2> 		
	  	 
<form  action="altera-produto.php" method="POST"></br>
	<div class="form-row"> 
		 <!-- esconde o id - hidden -->
		 <div>
		 	<input   type="hidden" name="id" value="<?=$produto['id'] ?>"></br>
		 </div>	

		</div>	
		<!-- <div class="form-group col-sm-5">
			<label class="alinhar">Nome  </label><input   type="text" class="form-control" name="nome" /></br>
		</div>	 -->
		<div class="form-group col-sm-3">
			<label class="alinhar">Produto</label><input  type="text" class="form-control" name="produto" value="<?=$produto['nome'] ?>" /></br>
		</div>	
		<div class="form-group col-sm-2">
			<label class="alinhar">Preço  </label> <input type="number" class="form-control" name="preco" value="<?=$produto['preco'] ?>" /></br>
		</div>	
		<div class="form-group col-sm-7">
			<label class="alinhar">Descrição </label><textarea name="descricao" class="form-control"><?=$produto['descricao'] ?></textarea></br>
		</div>
		
		   <!-- campo ckeckbox -->
		<div class="form-group col-sm-1">
			<label class="alinhar">Usado</label> <input type="checkbox" class="form-control" name="usado" <?=$usado?> value="true" /></br>
		</div>

		<table>
			<tr>
				<label class="form-group col-sm-1">Categoria</label>
				<td>	
					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : 

							$essaEhACategoria = $produto['categoria_id'] == $categoria['id']; 
							$selecao = $essaEhACategoria ? "selected = 'selected'" : "";
						?>

						  <option value="<?= $categoria['id'] ?>" <?=$selecao?>> <?= $categoria['nome']?></option>  

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
	                 
<div class="form-group col-sm-11">
	<button class="btn btn-primary" type="submit">Alterar</button> 
</div>	
      
</form>	   
	   	
<?php include("rodape.php"); ?>

</html>