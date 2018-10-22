<?php 

$from = $_POST['from'];
$to = $_POST['to'];
$name = $_POST['name'];
$phone = $_POST['tel'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$form = $_POST['form'];


require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'bin_trash@bk.ru';                 // Наш логин
$mail->Password = 'binmail$*ru3';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('bin_trash@bk.ru', 'LTS Info');   // От кого письмо 
$mail->addAddress('maaz112@yandex.ru');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML


// Быстрая заявка

if ($form === "quickOrder" && isset($from) && $from !== '' && isset($to) && $to !== '') {
  $mail->Subject = 'Оставлена новая быстрая заявка';
  $mail->Body    = '
    Пользователь: <b>' . $name . '</b><br> 
    Телефон: ' . $phone . '<br>
    От: ' . $from . '<br>
    До: ' . $to;
  $mail->AltBody = 'Это альтернативный текст';
}

// Заявка на обратный звонок

if ($form === "callOrder" && isset($name) && $name !== '' && isset($phone) && $phone !== '') {
  $mail->Subject = 'Оставлена новая заявка на обратный звонок';
  $mail->Body    = '
    Пользователь: <b>' . $name . '</b><br> 
    Телефон: ' . $phone;
  $mail->AltBody = 'Это альтернативный текст';
}

// Заявка на расчет услуг

if ($form === "requestBlock" && isset($from) && $from !== '' && isset($to) && $to !== '' && isset($name) && $name !== '' && isset($phone) && $phone !== '') {
  $mail->Subject = 'Оставлена новая заявка на расчет услуг';
  $mail->Body    = '
    Пользователь: <b>' . $name . '</b><br> 
    Телефон: ' . $phone . '<br>
    От: ' . $from . '<br>
    До: ' . $to;
  $mail->AltBody = 'Это альтернативный текст';
}

// Новый отзыв

if ($form === "feedbackForm" && isset($feedback) && $feedback !== '' && isset($name) && $name !== '' && isset($email) && $email !== '') {
  $mail->Subject = 'Оставлен новый отзыв';
  $mail->Body    = '
    Пользователь: <b>' . $name . '</b><br> 
    Email: ' . $email . '<br>
    Сообщение: <br><br>' . $feedback;
  $mail->AltBody = 'Это альтернативный текст';
}




if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>