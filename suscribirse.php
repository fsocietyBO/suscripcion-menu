<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(true);


$mail->SMTPDebug = 3;                               

$mail->isSMTP();            
                         
$mail->Host = "mail.fsocietybo.tk";

$mail->SMTPAuth = true;                          
   
$mail->Username = "subscribe@fsocietybo.tk";                 
$mail->Password = "subscribe123";                           

$mail->SMTPSecure = "tls";                           

$mail->Port = 25;                                   

$mail->From = "subscribe@fsocietybo.tk";
$mail->FromName = "Servicio de Suscripción al Menú";

$mail->addAddress($_POST["email"] , $_POST["nombre"]);

$mail->isHTML(true);

$mail->Subject = "Hola" .$_POST["nombre"] ." Bienvenido a Marcello's Pizzeria!!!";
$mail->Body = '<!doctype html><html> <head> <meta name="viewport" content="width=device-width"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <title>Simple Transactional Email</title> <style>@media only screen and (max-width: 620px) { table[class=body] h1 { font-size: 28px !important; margin-bottom: 10px !important; } table[class=body] p,table[class=body] ul,table[class=body] ol,table[class=body] td,table[class=body] span,table[class=body] a { font-size: 16px !important; } table[class=body] .wrapper,table[class=body] .article { padding: 10px !important; } table[class=body] .content { padding: 0 !important; } table[class=body] .container { padding: 0 !important; width: 100% !important; } table[class=body] .main { border-left-width: 0 !important; border-radius: 0 !important; border-right-width: 0 !important; } table[class=body] .btn table { width: 100% !important; } table[class=body] .btn a { width: 100% !important; } table[class=body] .img-responsive { height: auto !important; max-width: 100% !important; width: auto !important; }}@media all { .ExternalClass { width: 100%; } .ExternalClass,.ExternalClass p,.ExternalClass span,.ExternalClass font,.ExternalClass td,.ExternalClass div { line-height: 100%; } .apple-link a { color: inherit !important; font-family: inherit !important; font-size: inherit !important; font-weight: inherit !important; line-height: inherit !important; text-decoration: none !important; } #MessageViewBody a { color: inherit; text-decoration: none; font-size: inherit; font-family: inherit; font-weight: inherit; line-height: inherit; } .btn-primary table td:hover { background-color: #34495e !important; } .btn-primary a:hover { background-color: #34495e !important; border-color: #34495e !important; }}</style> </head> <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;"> <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">Bienvenido a nuestro restaurante!</span> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6"> <tr> <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td> <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top"> <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;"> <!-- START CENTERED WHITE CONTAINER --> <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;" width="100%"> <!-- START MAIN CONTENT AREA --> <tr> <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%"> <tr> <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top"> <table style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%"> <td align="center" style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top"> <img src="https://images.vexels.com/media/users/3/136312/isolated/preview/213fb725b5fbbd669093a338c9c16bdd-logo-pizza-comida-r-aacute-pida-by-vexels.png" height="200" widht="200" style="border: none; -ms-interpolation-mode: bicubic; max-width: 100%;"> </td><td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top"> </td></table> <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Hola!</p> <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Recibiste este correo porque solicitaste suscribirte a nuestro menú, esperamos que disfrutes mucho lo que tenemos para ofrecerte</p> <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;" width="100%"> <tbody> <tr> <td align="center" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;" valign="top"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;"> <tbody> <tr> <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; border-radius: 5px; text-align: center; background-color: #3498db;" valign="top" align="center" bgcolor="#3498db"> <a href="http://restaurant.fsocietybo.tk/" target="_blank" style="border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; display: inline-block; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-decoration: none; text-transform: capitalize; background-color: #3498db; border-color: #3498db; color: #ffffff;">Visita nuestro sitio</a> </td> </tr> </tbody> </table> </td> </tr> </tbody> </table> <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Además recibirás actualizaciones mensualmente de nuestro menú y nuestras promociones.</p> </td> </tr> </table> </td> </tr> </table> <div class="footer" style="clear: both; margin-top: 10px; text-align: center; width: 100%;"> <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%"> <tr> <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center"> <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">FSocietyBO, UPSA</span> <br> No quieres recibir más correos de nosotros? <a href="http://i.imgur.com/CScmqnj.gif" style="text-decoration: underline; color: #999999; font-size: 12px; text-align: center;">Desuscríbete</a>. </td> </tr> <tr> <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;" valign="top" align="center"> Un correo enviado por <a href="http://fsocietybo.com" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;">FSocietyBO</a>. </td> </tr> </table> </div> <!-- END FOOTER --> </div> </td> <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td> </tr> </table> </body></html>';
$mail->AltBody = "Gracias por Suscribirte a Marcello's Pizzeria!!!";

try {
    $mail->send();
    echo "El mensaje se envio correctamente!";
    header("Location:index.php?suscrito=true");
    exit();
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}