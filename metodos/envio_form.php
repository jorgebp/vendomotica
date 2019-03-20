<?php
       //Reseteamos variables a 0.
       $nombre = $email = $subject = $mensaje = $para = NULL;

       if (isset($_POST['submit'])) {

          //Obtenemos valores input formulario
          $nombre = $_POST['nombre'];
          $email = $_POST['email'];
          $subject = $_POST['motivo'];   
          $mensaje = $_POST['mensaje'];
          $para = 'jorge.beltranp@outlook.com';


          //Compones nuestro correo electronico

          //Incluimos libreria PHPmailer (deberas descargarlo).
          require'class.phpmailer.php';

          //Nuevo correo electronico.
          $mail = new PHPMailer;
          //Caracteres.
          $mail->CharSet = 'UTF-8';

          //De dirección correo electrónico y el nombre
          $mail->From = "info@tudominio.com";
          $mail->FromName = "Nombre de dominio";

          //Dirección de envio y nombre.
          $mail->addAddress($para, $nombre);
          //Dirección a la que responderá destinatario.
          $mail->addReplyTo("info@tudominio.com","Tunombre");

          //BCC ->  incluir copia oculta de email enviado.
          $mail->addBCC("copia@tudominio.com");

          //Enviar codigo HTML o texto plano.
          $mail->isHTML(true);

          //Titulo email.
          $mail->Subject = "Nuestro titulo";
          //Cuerpo email con HTML.
          $mail->Body = "
                  <h1>Envio de reporte de máquinas de Nscak y Café.</h1>

                  Nombre: $nombre<br /> 
                  Email: $email <br />
                  Asunto: $subject <br />
                 Mensaje: $mensaje <br />

          "; 

        //Comprobamos el envio.
        if(!$mail->send()) {                   
            echo "<script language='javascript'>
                alert('fallado');
             </script>";
        } else {
            echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
             </script>";
        } 
      }
    ?>