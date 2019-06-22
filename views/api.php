<?php
require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

$mail = new PHPMailer;

$smtpUsername = 'akhmadharuna@gmail.com';
$smtpPassword = 'Yabatech2014';
$emailFrom = 'akhmadharuna@gmail.com';
$emailFromName = 'Csc project';
$emailToName = 'you';
$emailTo = $_GET['email'];

$mmsg = 'Your event otp is ' . $_GET['eventcode'];



$mail->isSMTP();
$mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
$mail->Port = 587; // TLS only
$mail->SMTPSecure = 'tls'; // ssl is depracated
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->setFrom($emailFrom, $emailFromName);
$mail->addAddress($emailTo, $emailToName);
$mail->Subject = 'Event Otp';
$mail->msgHTML($mmsg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
$mail->AltBody = 'HTML messaging not supported';
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    $res = [
        'status' => true,
        'response' => 'message sent successfully',
    ];
    echo json_encode($res);
}
