<?php include("cabecalho.php"); 
 include("conecta.php"); 
 include("BD-produto.php");?>

<?php

 $id = $_POST['id'];

 removeProduto($conexao,$id);
 header("Location: trata-botao.php?removido=true");
 die();

 ?>



 