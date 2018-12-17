<?php 
class ProdutoFactory {

    private $classes = array("Produto", "Ebook", "LivroFisico");

    public function criaPor($tipoProduto, $params) {

    	$produtoNome = $params['nome'];
		$preco = $params['preco'];
		$descricao = $params['descricao'];
		$categoria = new Categoria();
		$usado = $params['usado'];

        if (in_array($tipoProduto, $this->classes)) {
            return new $tipoProduto($produtoNome, $preco, $descricao, $categoria, $usado);
        } else {

            return new Produto($produtoNome, $preco, $descricao, $categoria, $usado);
        }
    }
}
?>