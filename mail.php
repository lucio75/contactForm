<?php
//Recuperiamo tutte le variabili
    $mail = $_POST['email'];
    $name = $_POST['nome'];
	$tel= $_POST['tel'];
    $subject = $_POST['oggetto'];
    $text = $_POST['message'];
    $ip = $_SERVER['REMOTE_ADDR'];
	if(isset($_POST['privacy'])){
		$privacy="Ho letto ed accetto l'informativa sulla privacy";
	}

//Qui andrà inserito il tuo indirizzo e-mail
$to = "info@freewebsolution.it";

//Creazione del mesaggio da inviare
$message = "Hai ricevuto una e-mail da:<br/><br/><b>Nome:</b> ".$name."<br/><br/><b>Email:</b> ".$mail." <br/><br/><b>Telefono:</b> ".$tel."<br/><br/><b>Privacy:</b> ".$privacy."
";
$message .= "<p><b>Messaggio:</b>
".$text."

";
$message .= "<p>IP: ".$ip."
";
$headers = "From: $mail \n";
$headers .= "Reply-To: $mail \n";
$headers .= "MIME-Version: 1.0 \n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1 \n";

//Se l'e-mail viene spedita correttamente, compare un messaggio di avvenuto invio
 if(mail($to, $subject,$message,$headers)){
    echo "

Messaggio inviato con successo

";
}
//Altrimenti un messaggio di errore
else{
    echo "

<span style='color:red'>Ci sono stati degli errori nell'invio del messaggio.</span>

";
}

?>