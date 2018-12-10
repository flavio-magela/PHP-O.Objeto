<?php 
require_once("cabecalho.php");
require_once("BD-categoria.php");
//  $categoria = new Categoria();
// $categorias = ListaCategorias($conexao);
/* criação do autoload - carregamento automatico no cabecalho.php - não é mais necessário carrecar as classes aqui.
		 require_once("class/Produto.php");
		 require_once("class/Categoria.php");
*/ 

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
			<label class="alinhar">Usado</label><input type="checkbox" class="form-control" name="usado" <?= $produto->isUsado() ?> value="true" />
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

						  <option value="<?= $categoria->getId()?>" <?=$selecao?>> <?= $categoria->getNome() ?></option>  

						<?php endforeach ?>

					</select></br>
				</td>				
			</tr>
			
		</table></br>
		<table>
			<tr>
				<label class="form-group col-sm-1" >Tipo do produto</label>
				<td>	
					<!-- Criação da Categoria com Combo Box - Caixa de Seleção -->

					<select name="tipoProduto" class="form-control">
			            <?php
			            $tipos = array("Produto", "Livro");
			            foreach($tipos as $tipo) : 
			                $esseEhOTipo = get_class($produto) == $tipo;
			                $selecao = $esseEhOTipo ? "selected='selected'" : "";
			            ?>
			                <option value="<?=$tipo?>" <?=$selecao?>>
			                    <?=$tipo?>
			                </option>
			            <?php
			            endforeach 
			            ?>
        			</select>
				</td>				
			</tr>	
		</table></br>		
		<div class="form-group col-sm-3">
				<label class="alinhar">ISBN</label> <input placeholder="Digite o ISBN - Caso seja um livro" type="text" class="form-control" name="isbn" value="<?php
				if($produto->temIsbn()){
					echo $produto->getIsbn();
					}  ?>" /></br>
		</div></br>
			


