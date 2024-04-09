<?php
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$celular = addslashes($_POST['celular']);

$para = "zfernandooliveira@hotmail.com";
$assunto = "pergunta";
$corpo = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" . "Telefone: " . $celular;

$cabecalhos = "From: zfernandooliveira@hotmail.com" . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();

if (mail($para, $assunto, $corpo, $cabecalhos)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Erro ao enviar o e-mail. Por favor, tente novamente mais tarde.";
}
?>
