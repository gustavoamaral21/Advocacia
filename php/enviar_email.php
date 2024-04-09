<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    $destinatario = "contato@gganalytics.com.br"; // Substitua pelo seu endereço de e-mail
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    
    $mensagem_formatada = "
    <html>
    <head>
    <title>Contato pelo Site</title>
    </head>
    <body>
    <h2>Contato pelo Site</h2>
    <p><strong>E-mail do remetente:</strong> $email</p>
    <p><strong>Assunto:</strong> $assunto</p>
    <p><strong>Mensagem:</strong> $mensagem</p>
    </body>
    </html>";
    
    // Enviar e-mail
    if (mail($destinatario, $assunto, $mensagem_formatada, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
}
?>
