<?php

session_start();

//require_once("contato.php");

$nome = "nome teste";
$email = "email teste";
$mensagem = "mensagem teste";

/* utilizar o PHPMailer */

require_once("PHPMailerAutoload.php");

/* configuração do GMAIL */

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 0;        // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
$mail->SMTPAuth = true;        // Autenticação ativada
$mail->SMTPSecure = 'tls';    // TLS REQUERIDO pelo GMail
$mail->Host = 'smtp.gmail.com';    // SMTP utilizado
$mail->Port = 587;          // A porta 587 deverá estar aberta em seu servidor
$mail->Username = "flavio.mrsantos@gmail.com";
$mail->Password = "minha senha =)";

$mail->setFrom("flavio.mrsantos@gmail.com", "Alura Curso PHP e MySQL");
$mail->addAddress("flavio.mrsantos@gmail.com");
$mail->Subject = "Email de contato da loja";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody = "de: {$nome}\nemail:{$email}\nmensagem: {$mensagem}";

if($mail->send()) {
    $_SESSION["success"] = "Mensagem enviada com sucesso";
    header("Location: index.php");
} else {
    $_SESSION["danger"] = "Erro ao enviar mensagem " . $mail->ErrorInfo;
    header("Location: contato.php");
}
die();