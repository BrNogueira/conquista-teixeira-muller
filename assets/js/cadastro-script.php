<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>>Cadastro Empresas Associadas</title>
</head>

<body>
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

?>

<?php

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

/*FomulÃ¡rio de contato */
$nome      = $_POST['nome'];
$segmento     = $_POST['segmento'];
$razao     = $_POST['razao'];
$cnpj     = $_POST['cnpj'];
$endereco     = $_POST['endereco'];
$cidade     = $_POST['cidade'];
$estado     = $_POST['estados-brasil'];
$cep     = $_POST['cep'];
$email     = $_POST['email'];
$telefone     = $_POST['telefone'];

$nome1 = utf8_decode($nome);
$segmento1 = utf8_decode($segmento);
$razao1 = utf8_decode($razao);
$endereco1 = utf8_decode($endereco);
$cidade1 = utf8_decode($cidade);
$estado1 = utf8_decode($estado);


/* Destinat&aacute;rio */
	/*
	*/
$subject = "Cadastro Empresas Associadas";

/* mensagem */
$message = "
<html>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
<head>
 <title>Cadastro Empresas Associadas</title>
</head>
<body><font face='arial' size='2'>
__________________________________________________<br><br>
<b>Cadastro Empresas Associadas</b><br>
<br>
<b>Nome:</b> $nome1<br>
<b>E-mail:</b> <a href=\"mailto:$email\">$email</a><br>
<b>Segmento:</b> $segmento1<br>
<b>Raz&atilde;o Social:</b> $razao1<br>
<b>CNPJ:</b> $cnpj<br>
<b>Endere&ccedil;o:</b> $endereco1<br>
<b>Cidade:</b> $cidade1<br>
<b>Estado:</b> $estado1<br>
<b>CEP:</b> $cep<br>
<b>Telefone:</b> $telefone<br>

<br><br>__________________________________________________
</font>
</body>
</html>
";


include_once ('class.phpmailer.php');

// Instantiate your new class
$mail = new PHPMailer;

// Now you only need to add the necessary stuff
$mail->From = "dennis@conquistacom.com";
$mail->Sender = "dennis@conquistacom.com";
$mail->AddReplyTo("$email", "$nome1");
$mail->FromName = "$nome1";
$mail->AddAddress("abtb@abtb.com.br");
$mail->AddAddress("dennis@conquistacom.com");
$mail->AddAddress("nubia.regionalsul@abtb.com.br");
$mail->Subject = "Cadastro Empresas Associadas";
$mail->IsHTML(true);
$mail->Body = $message;
//$mail->AddAttachment($_FILES['curriculo']['tmp_name'], $_FILES['curriculo']['name']); // optional name

if (!$captcha_data) {
    echo "<script>alert('Por favor, confirme o captcha.');</script>";
	echo"<script>window.location.replace('http://abtb.com.br/cadastro-pj.php');</script>";
    exit;
}
$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc3JmYUAAAAAKFD0PZKMDXyII7i8bXDNfW5d9CH&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
 
 
if ($resposta.success) {
    echo "Obrigado por deixar sua mensagem!";
} else {
    echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
    exit;
}

if (!$mail->Send())
{
	echo "<script>alert('Falha no envio. Tente novamente!');</script>";
}
else
{
	echo "<script>alert('Muito obrigado pelo cadastro!');</script>";
	echo "<script>window.location.replace('http://abtb.com.br/cadastro-pj.php')</script>;";
}


?>	
<script language="JavaScript">
window.location.replace('http://abtb.com.br/cadastro-pj.php');
</script>

</body>
</html>