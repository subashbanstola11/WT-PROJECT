<?php
error_reporting(0);
require_once('../dbcon.php');

// php mailer
require('../library/PHPMailer-master/src/PHPMailer.php');
require('../library/PHPMailer-master/src/Exception.php');
require('../library/PHPMailer-master/src/SMTP.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if ($_GET) {
    $email = $_GET['email'] ? $_GET['email'] : '';
    $password = $_GET['password'] ? $_GET['password'] : '';
    $confirm = $_GET['confirm'] ? $_GET['confirm'] : '';

    if ($password == $confirm) {
        $encrypt_pass = md5($password);
        echo ($email == '' || $password = '') ? "Please enter valid email and password" : '';
        $run_query = $conn->query("Insert into users (email, password) values('$email', '$encrypt_pass')");

        if ($run_query) {
            /** To Send Emails */
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'alostableo@gmail.com';
            $mail->Password = 'fstxafpjpdzpovuw';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('alostableo@gmail.com');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Account created';
            $mail->Body = '<h1>Your Account has been added </h1>';

            if ($mail->send()) {
                echo "Account Created Please check you email";
                ?>
                
        <script>
            setTimeout(function(){
                window.location.href = "<?php echo '../add-new.php?message=accountAdded&accEmail=' .$email ?>"
            },3000);
        </script>
<?php            }
        }
        else{
            echo "Unique email address";
        }
    } else {
        echo "Sorry !! Cofirm Password and password didn't matched";
        header('location: ../add-new.php?message=Loginfailed');

    }
}

?>