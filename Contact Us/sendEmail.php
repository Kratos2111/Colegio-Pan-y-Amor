<?php
//include required PHPMAILER
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
//Define namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//create intance of PHPMAILER
$mail = new PHPMailer();
//set mailer to use
$mail ->isSMTP();
//define MSTP Host
$mail ->Host = "smtp.gmail.com";
//enable SMTP authentication
$mail ->SMTPAuth = "true";
//set type of scryption
$mail ->SMTPSecure = "tls";
//set port to connect SMTP
$mail ->Port = "587";
//set Gmail username
$mail ->Username = "consultaspanyamor@gmail.com"; ///////////////////AQUI VA TU CORREO
//set Gmail password
$mail ->Password = "abc$1234"; //////////////////Aqui va tu contraseña
//set email subject
$mail ->Subject = "Asunto: " .$_POST['subject'];
//enable HTML
//si quieres mandar un correo con mejor diseño, utiliza HTML sintax
//$mail ->isHTML(true);
//set sender Email
$mail ->setfrom("consultaspanyamor@gmail.com");
//set email body
$mail ->Body = "Enviado desde la página de Matemáticas 6to grado. \r\n Mi nombre es " . $_POST["name"] . "\n Correo: " .$_POST['email'] ."\n Los motivos de mi consulta es: " .$_POST['message']. "\n \r" ;
				

//add recipient
$mail ->addAddress("consultaspanyamor@gmail.com");
//finally send mail
if($mail ->Send())
{
	echo "<script>alert('The message has been sent.') </script>";  
    header("Location:index.html");
}else{
	echo "Error...";
}
//close and truncate all
$mail ->smtpClose();
?>
