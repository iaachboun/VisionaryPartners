<?php
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;
//use PHPMailer\PHPMailer\SMTP;
//
//require 'vendor/PHPMailer/phpmailer/src/Exception.php';
//require 'vendor/PHPMailer/phpmailer/src/PHPMailer.php';
//require 'vendor/PHPMailer/phpmailer/src/SMTP.php';
//
//require 'vendor/autoload.php';
//
////Create an instance; passing `true` enables exceptions
//$mail = new PHPMailer(true);
//
//try {
//    $to = "info@visionarypartners.nl";
//    $from = $_REQUEST['email'];
//    $name = $_REQUEST['name'];
//    $subject = $_REQUEST['subject'];
////    $number = $_REQUEST['number'];
//    $cmessage = $_REQUEST['message'];
//
//    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
//    $mail->isSMTP();                            //Send using SMTP
//    $mail->Host = 'visionarypartners.nl';                     //Set the SMTP server to send through
//    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
//    $mail->Username = 'info@visionarypartners.nl';                     //SMTP username
//    $mail->Password = 'bTK*nX5x^afylz71';                               //SMTP password
//    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
//
//    //Recipients
//    $mail->setFrom('info@visionarypartners.nl', 'VisionaryPartners.nl');
//    $mail->addAddress('info@visionarypartners.nl', 'VisionaryPartners.nl');     //Add a recipient
//    $mail->addReplyTo('info@visionarypartners.nl', 'Information');
//
//
//    //Content
//    $mail->isHTML(true);                                  //Set email format to HTML
//    $mail->Subject = $_POST['name'] . " heeft aangemeld voor contact.";
//    $mail->Body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
//    $mail->Body .= "<table style='width: 100%;'>";
//    $mail->Body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
//    $mail->Body .= "<a href='visionarypartners.nl'><img src='img/logo/logoIcon.png' alt=''></a><br><br>";
//    $mail->Body .= "</td></tr></thead><tbody><tr>";
//    $mail->Body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
//    $mail->Body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
//    $mail->Body .= "</tr>";
//    $mail->Body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
//    $mail->Body .= "<tr><td></td></tr>";
//    $mail->Body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
//    $mail->Body .= "</tbody></table>";
//    $mail->Body .= "</body></html>";
//
//    $mail->send();
////    header('location: /contact.php');
//    echo 'Bericht is verstuurd!';
//} catch (Exception $e) {
//    echo "Bericht kon niet verstuurd worden!: {$mail->ErrorInfo}";
//}
//?>

<?php
$to = "support@visionarypartners.nl";

    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $subject = $_REQUEST['subject'];
    $cmessage = $_REQUEST['message'];

$message = "
<html>
<head>
<title>Contact formulier</title>
</head>
<body>
<p>Deze mail komt vanaf onze contact form!</p>
<table>
<tr>
<th>Naam: {$name}</th>
</tr>
<tr>
<td>Onderwerp: {$subject}</td>
<td>Bericht: ${cmessage}</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From: {$from}" . "\r\n";

mail($to,$subject,$message,$headers);
?>
