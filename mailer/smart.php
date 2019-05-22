<?php 

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$complectation = $_POST['user_complectation'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';
//$mail->SMTPDebug = 3;                               // Enable verbose debug output
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'igor_hello_igor@mail.ru';                 // Наш логин
$mail->Password = '1632161224id';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('igor_hello_igor@mail.ru', 'Ihor Kulybko');   // От кого письмо 
$mail->addAddress('lyashka2015@yandex.ru');     // Add a recipient
/*$mail->addAddress('. $email .', 'Ihor Kulybko');  */             // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML
$mail->Subject = 'Это тема сообщения';
$mail->Body    = '
    ' . $name . ' вы оставили завку на нашем сайте.<br> 
    Мы свяжемся с вами. Ваш номер телефона: ' . $phone . '.<br>
    ' . $complectation . '';
$mail->AltBody = 'Это альтернативный текст';
if(!$mail->send()) {
    return false;
} else {
    return true;
}


?>