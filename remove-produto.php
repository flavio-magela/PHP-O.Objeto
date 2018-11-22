<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("BD-produto.php");
 include("BD-produto-lista.php");
  include("logica-usuario.php");

 ?>


<?php

 $id = $_POST['id'];

 removeProduto($conexao,$id); 
 $_SESSION["success"] = "Produto Excluido com sucesso!";
 header("Location: produto-formulario.php");
 die();
 
 ?>



 