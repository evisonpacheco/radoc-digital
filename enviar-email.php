<?php

require 'db-connection.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\wamp64\www\RADOC\phpMailer\src\Exception.php';
require 'C:\wamp64\www\RADOC\phpMailer\src\PHPMailer.php';
require 'C:\wamp64\www\RADOC\phpMailer\src\SMTP.php';

$email_validar = $_POST['email_enviado'];
$email_cadastrado = $_SESSION['user_email'];

if (strcasecmp($email_validar, $email_cadastrado) == 0) {

	$mail = new PHPMailer();

	// Configurações do servidor
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
	$mail->isSMTP();                                            //Send using SMTP
	$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
	$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
	$mail->Username   = 'equiperadoc@gmail.com';                     //SMTP username
	$mail->Password   = 'secreta';                               //SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
	$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

	// Endereços de e-mail
	$mail->setFrom('equiperadoc@gmail.com', 'Equipe RADOC');
	$mail->addAddress($_POST['email_enviado']);     

	// Conteúdo do e-mail
	$mail->isHTML(true);                                
	$mail->Subject = 'Confirme seu e-mail';
	$mail->Body    = '  Para confirmar o seu e-mail cadastrado no RADOC, clique no link a seguir:
						<br />
						<a href="http://radoc/validar-email.html">Valide seu e-mail</a>
						<br /><br />
						-------------------------------------------------
						<br /><br />
						<b>Não é você?</b> Clique: <a href="http://radoc/email-invalido.html">Não realizei cadastro no RADOC</a>
					';
	$mail->AltBody = 'Para confirmar o seu e-mail cadastrado no RADOC, copie o link a seguir e cole em seu navegador: http://radoc/validar-email.html
					  
					  Se você não realizou cadastro no RADOC, copie o link a seguir e cole em seu navegador: http://radoc/email-invalido.html
					 ';

	if($mail->send()){
		echo "<script type='text/javascript'>
					alert('E-mail de validação enviado: cheque sua caixa de entrada para confirmar seu e-mail no RADOC.');
					window.location.replace('pages/home.php');
			  </script>";
	} else {
		echo "		Erro ao enviar e-mail de validação. Error: {$mail->ErrorInfo}";
		header("Refresh: 3; url=pages/editar-dados.php");
		exit();
	}

} else {
	echo "Este não é seu e-mail cadastrado. Mude seu e-mail antes de tentar novamente.";
	header("Refresh: 3; url=pages/editar-dados.php");
	exit();
}

?>