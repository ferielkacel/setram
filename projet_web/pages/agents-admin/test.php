<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp-enola.alwaysdata.net';
    $mail->SMTPAuth = true;
    $mail->Username = 'enola@alwaysdata.net'; 
    $mail->Password = 'Enola123?';
    $mail->SMTPSecure = 'tls'; 
    $mail->Port = 587; 

    $mail->setFrom('enola@alwaysdata.net', 'Feriel');
    /*email de user*/
    $mail->addAddress("kacelferiel0503@gmail.com"); 
    $mail->isHTML(true);
    $mail->Subject = 'Accept demmande dabonment.';
    /*body t3 email */
$mail->Body = 'Bonjour,<br> Appuyer sur le lien suivant pour continuer la procedure de réintialisation !<br> Pour valider, veuillez cliquer sur ce lien.</><br>Ps : si vous navez pas fait cette demande, ignorer ce mail.';


    $mail->send();
                        ?><script>alert("Un email vous a étais envoyer, checker votre boite mail.")</script><?php

                        header("homea.php");                                            
}   catch (Exception $e) {
    echo 'Erreur lors de l\'envoi de l\'e-mail : ', $mail->ErrorInfo;
}
    
   
?>