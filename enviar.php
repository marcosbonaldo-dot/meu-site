<?php
// Captura os dados do formulário
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];

// Configurações do email
$para = "marcosbonaldo@yahoo.com.br"; // coloque seu email real aqui
$assunto = "Mensagem do site";

// Corpo do email
$corpo = "Nome: " . $nome . "\n";
$corpo .= "Mensagem: " . $mensagem;

// Cabeçalhos
$cabecalhos = "From: contato@seusite.com\r\n";
$cabecalhos .= "Reply-To: " . $para;

// Função de envio
if(mail($para, $assunto, $corpo, $cabecalhos)) {
    echo "Mensagem enviada com sucesso!";
} else {
    echo "Erro ao enviar mensagem.";
}
?>
