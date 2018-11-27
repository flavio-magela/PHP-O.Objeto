<?php  
   // No site www.php.net vc usa o error_reportint =(php.ini) para configurar tipos de msg q vc quer que apareça ou não no seu sistema (^ = menos a mensagem E_NOTICE);
	 error_reporting(E_ALL ^ E_NOTICE);

	 include("mostra-alerta.php");

?>

<html lang="pt-br">
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css"> -->
      <!--Import fontawesome.css-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
      <link rel="stylesheet" type="text/css" href="">
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand"	href="index.php">Minha Loja</a>
			</div>
				<div >
					<ul class="nav navbar-nav">

						<li><a href="produto-formulario.php">Adiciona Produto</a></li>
						<li><a href="produto-lista.php">Lista de Produtos</a></li>
						<li><a href="contato.php">Contato</a></li>


					</ul>				
				</div>			
		</div>		
	</div>

    <div class="container">

        <div class="principal">
  <?php 
	mostraAlerta("success");
	mostraAlerta("danger");
?>

    <!-- fim cabecalho.php -->