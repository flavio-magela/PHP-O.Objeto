<?php
function buscaUsuario($conexao, $email, $senha){
	$senhaMd5 = md5($senha);
	$query = "select * from usuario where email = '{$email}' and senha = '{$senhaMd5}'";
	$resultado = mysql_query($conexao,$query);
	$usuario  = mysqli_fetch_assoc($resultado);
	return $usuario;
}