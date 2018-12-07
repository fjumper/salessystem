<?php
	  session_start();

    if(isset($_SESSION['usuario'])) {
        
    } else {
        header("Location: login.php?Debe Iniciar Sesion");
    }

    date_default_timezone_set("America/Lima");

    require '../php/get.php';
    $get = new get();
    $IdUsuario = $_SESSION['usuario'][0]['Id'];
    $resultDC = $get->getSP("spListarDireccionCliente('$IdUsuario')");

    

    // Envio al correo

    // require "../php/phpmailer/PHPMailerAutoload.php";
         
    // $mail = new PHPMailer;
         
    // //indico a la clase que use SMTP
    // $mail->IsSMTP();
		  
    // //permite modo debug para ver mensajes de las cosas que van ocurriendo
    // //$mail->SMTPDebug = 2;

	// //Debo de hacer autenticación SMTP
    // $mail->SMTPAuth = true;
    // $mail->SMTPSecure = "ssl";

	// //indico el servidor de Gmail para SMTP
    // $mail->Host = "smtp.gmail.com";

	// //indico el puerto que usa Gmail
    // $mail->Port = 465;

	// //indico un usuario / clave de un usuario de gmail
    // $mail->Username = "ucemporio@gmail.com";
    // $mail->Password = "ucemporio2018@";

    // $mail->From = "ucemporio@gmail.com";
    // $mail->FromName = "Administrador";
    // $mail->Subject = htmlspecialchars("Boleta Electrónica");
    // $mail->addAddress($email, $nombre);
    // $mail->MsgHTML("Su comprar se realizó con exito");
        
    // if ($adjunto ["size"] > 0) {
    //     $mail->addAttachment($adjunto ["tmp_name"], $adjunto ["name"]);
    // }
        
    // $mail->Send()

?>