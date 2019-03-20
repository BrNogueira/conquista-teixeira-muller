<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<?php
/*FomulÃ¡rio de contato */
$nome      = $_POST['nome'];
$email     = $_POST['email'];
$assunto     = $_POST['assunto'];
$mensagem     = $_POST['mensagem'];

$nomedec = utf8_decode($nome);
$assuntodec = utf8_decode($assunto);
$mensagemdec = utf8_decode($mensagem);

/* Destinat&aacute;rio */
	/*
	*/
$subject = "Contato do Site";

/* mensagem */
$message = "
<html>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<head>
 <title>Contato do Site</title>
</head>
<body><font face='arial' size='2'>
__________________________________________________<br><br>
<b>Contato do Site</b><br>
<br>
<b>Nome:</b> $nomedec<br>
<b>E-mail:</b> <a href=\"mailto:$email\">$email</a><br>
<b>Assunto:</b> $assuntodec<br>
<b>Mensagem:</b> $mensagemdec<br>

<br><br>__________________________________________________
</font>
</body>
</html>
";


include_once ('class.phpmailer.php');

// Instantiate your new class
$mail = new PHPMailer;

// Now you only need to add the necessary stuff
$mail->From = "contato@teixeiramuller.com.br";
$mail->Sender = "contato@teixeiramuller.com.br";
$mail->AddReplyTo("$email", "$nome");
$mail->FromName = "$nomedec";
$mail->AddAddress("contato@teixeiramuller.com.br");
$mail->AddAddress("vanessa@teixeiramuller.com.br");
$mail->Subject = "Contato do Site";
$mail->IsHTML(true);
$mail->Body = $message;
//$mail->AddAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']); // optional name

if (!$mail->Send())
{
	echo "<script>alert('Falha no envio. Tente novamente!');</script>";
}
else
{
	echo "<script>alert('Muito obrigado por seu contato. Em breve, retornaremos.');</script>";
	echo "<script>window.location.replace('../contato.php');</script>";

}
?>	


</body>
</html>