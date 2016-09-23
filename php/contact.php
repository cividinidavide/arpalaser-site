<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$messaggio = $_POST['messaggio'];
	$telefono = $_POST['telefono'];

	// per inserire più destinatari è necessario inserire gli indirizzi separati da una virgola
	// imposto le condizioni del form
	if ($nome != "" && $email != "" && $messaggio != "" && $telefono != "") {
		header("location: ../sendmail.html"); // apre il file sendmail.html
		// imposto il sistema di invio
		$destinatario = "davide.civid.96@gmail.com";
		$oggetto = "Richiesta Informazioni (Arpa Laser)";
		$corpo = "Questo messaggio è stato inviato dal modulo di richiesta informazioni (Arpa Laser):\n
			      Nome: $nome\n 
				  E-mail: $email\n
				  Telefono: $telefono\n
				  Messaggio: $messaggio\n";
		mail($destinatario, $oggetto, $corpo);
	} else {
	    header("location: ../error.html"); // apre il file error.html
	}
?>