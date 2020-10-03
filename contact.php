<?php
$field_name = $_POST['nombre'];
$field_email = $_POST['email'];
$field_message = $_POST['consulta'];

$mail_to = 'carolinacalvino@ddcweb';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Gracias por enviar su mensaje');
		window.location = 'contact_page.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Mensaje no enviado. Por favor envie un email a carolinaayelencalvi@hotmail.com');
		window.location = 'contact_page.html';
	</script>
<?php
}
?>