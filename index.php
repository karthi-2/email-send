<?php 
	require 'phpmailer/PHPMailerAutoload.php';
	$mail=new PHPMailer;
	//$mail->isSMTP();
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';

	$mail->Username='sec19cs080@sairamtap.edu.in';
	$mail->Password='snehaa123$';

	$mail->setFrom('sec19cs080@sairamtap.edu.in','deepdrones');
	$mail->addAddress('karthikeyan01230123@gmail.com');
	$mail->addReply('sec19cs080@sairamtap.edu.in');

	$mail->isHTML(true);
	$mail->Subject='PHP Mailer Suject';
	$mail->Body='<h1 align=center>Hi Hello...</h1>';
	if(!$mail->send()){
		echo "Message could not be sent!";
	}
	else{
		echo "Message has been sent!";
	}
?>