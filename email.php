<?php 
    require('./library/PHPMailer-master/src/PHPMailer.php');
    require('./library/PHPMailer-master/src/Exception.php');
    require('./library/PHPMailer-master/src/SMTP.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'alostableo@gmail.com';
    $mail -> Password = 'fstxafpjpdzpovuw';
    $mail -> SMTPSecure = 'ssl';
    $mail -> Port = 465;
    $mail -> setFrom('alosstableo@gmail.com');
    $mail -> addAddress('prajwalbns15@gmail.com');
    $mail -> isHTML(true);
    $mail -> Subject = 'Test From Localhost';
    $mail -> Body = 'Hurry up';

    $mail -> send();

    echo "Mail Sended"
?>