<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];
    
    // Configurar o objeto PHPMailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@gganalytics.com.br'; // Seu e-mail
    $mail->Password = 'ObscureGBRTh100@'; // Sua senha
    $mail->SMTPSecure = 'ssl'; // ssl ou tls
    $mail->Port = 465; // Porta SMTP

    // Configurar remetente e destinatário
    $mail->setFrom($email);
    $mail->addAddress('contato@gganalytics.com.br');
    
    // Configurar o e-mail
    $mail->isHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = "<h3>Mensagem de $email</h3><p>$mensagem</p>";
    
    // Enviar e-mail
    if ($mail->send()) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail: " . $mail->ErrorInfo;
    }
}
?>
