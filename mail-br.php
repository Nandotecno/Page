<?php
session_start();
$sendmail = filter_input(INPUT_POST, 'btn', FILTER_SANITIZE_STRING);
if($sendmail){
	if (isset($_POST['name']) && !empty($_POST['name'])){
		$para = "sefadv@saeferreira.com.br";
		$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
		$sub = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
		$ct = filter_input(INPUT_POST, 'ct', FILTER_SANITIZE_STRING);
		$assunto = "Enviado do site" ;
		$msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
		$ip_visitante = $_SERVER['REMOTE_ADDR'];
		$headers 	= "From: ".$email. " - Via Site\r\n";
		$headers 	.= "Reply-To: ". $email . "\r\n";
		$headers 	.= "MIME-Version: 1.0\r\n";
		$headers 	.= "Content-Type: text/html; charset=utf-8\r\n";
		$body	 = "<strong>Nome: </strong>{$nome}<br>";
		$body 	.= "<strong>Email: </strong>{$email}<br>";
		$body 	.= "<strong>Assunto: </strong>{$sub}<br>";
		$body 	.= "<strong>Mensagem: </strong>{$msg}<br>";
		$body 	.= "<strong>IP: </strong>{$ip_visitante}<br>";
		$send = utf8_encode(mail($para, $assunto, $body, $headers));
		if($ct == 'br'){
			$_SESSION['msg'] = "Mensagem enviada com sucesso!";			
		}elseif($ct =='en'){
			$_SESSION['msg'] = "Message sent successfully!";
		}else{
			$_SESSION['msg'] = "Mensaje enviado correctamente!";
		}		
		header('Location:/inicio#contact');
}else{
	if($ct == 'br'){
		$_SESSION['msg'] = "Mensagem não foi enviada.";
	}elseif($ct == 'en'){
		$_SESSION['msg'] = "Message was not sent.";
	}else{
		$_SESSION['msg'] = "No se envió el mensaje.";
	}		
		header('Location:inicio#contact');
	}
}else{
	$_SESSION['msg'] = "-----";
	header('Location:inicio#contact');
}
?>
