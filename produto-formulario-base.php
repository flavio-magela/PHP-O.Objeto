<?php 
require_once("class/Categoria.php");
require_once("BD-categoria.php");
$categoria = new Categoria();
$categorias = ListaCategorias($conexao);

?>

		<div class="form-group col-sm-5">
			<label class="alinhar">Nome  </label><input   type="text" class="form-control" name="nome" placeholder="Nome do Comprador" required /></br>
		</div>	
		<div class="form-group col-sm-4">
			<label class="alinhar">Produto</label><input  placeholder="Nome do Produto" required type="text" class="form-control" name="produto" value="<?= $produto->getProduto()?>" /></br>
		</div>	
		<div class="form-group col-sm-3">
			<label class="alinhar">Preço  </label> <input placeholder="Preço do Produto" required type="number" class="form-control" name="preco" value="<?= $produto->getPreco() ?>" /></br>
		</div>	
		<div class="form-group col-sm-7">
			<label class="alinhar">Descrição  </label> <textarea placeholder="Descrição do Produto" required name="descricao" class="form-control"><?= $produto->getDescricao() ?></textarea></br>
		</div>

		   <!-- campo ckeckbox -->
		<div class="form-group col-sm-1">
			<label class="alinhar">Usado</label><input type="checkbox" class="form-control" name="usado" <?= $produto->getUsado() ?> value="true" /></br>
		</div>

		<table>
			<tr>
				<label class="form-group col-sm-1" >Categoria</label>
				<td>	
					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

					<select name="categoria_id" class="form-control">
						<?php foreach ($categorias as $categoria) : 

							$essaEhACategoria = $produto->getCategoria()->getId() == $categoria->getId(); 
							$selecao = $essaEhACategoria ? "selected = 'selected'" : "";
						?>

						  <option value="<?= $categoria->getid()?>" <?=$selecao?>> <?= $categoria->getNome() ?></option>  

						<?php endforeach ?>

					</select>						

				</td>

				
				
			</tr>


		</table>
	


