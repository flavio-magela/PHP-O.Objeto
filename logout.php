<?php 
include("logica-usuario.php");

logout();
$_SESSION["success"] = "Logout - Saida do Sistema com Sucesso!";
header("Location: index.php");
die();

