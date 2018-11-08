<?php
$conexao = mysqli_connect('localhost', 'root', '', 'loja');

if (!$conexao){
	
	die ("Não foi possível conectar ao Banco de Dados. " .mysqli_error($conexao));		
}