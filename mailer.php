<?php
session_start();
include('../resources/db-conf.php');
include('../resources/config.php');

//Load PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/src/Exception.php';
require '../vendor/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/src/SMTP.php';

// Send verification mail
function sendVerifyEmail($email,$verify_token)
{
    $url_root = $_SESSION['root_url'];
    $mail = new PHPMailer();

    $subject = "You are one step away from receiving Github Timeline Updates";
    $body = "
    Hi, thanks for subscribing. <br>
    <a href='$url_root/verify.php?token=$verify_token'>Click here to verify your mail</a>
    ";

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   
        $mail->isSMTP();                                            
        $mail->Host       = $_SESSION['smtp_host'];                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = $_SESSION['email_username'];                     
        $mail->Password   = $_SESSION['password'];                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                   
        
        $mail->setFrom('hi@danishshakeel.me', 'Github5Updates');
        $mail->addAddress($email);    
    
        //Content
        $mail->isHTML(true);                                 
        $mail->Subject = $subject;
        $mail->Body    = $body;
    
        $mail->send();
        echo '<script>Message has been sent</script>';
    } catch (Exception $e) {
        echo "<script>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</script>";
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email_exists = 1;
    $error_sending = 2;
    $no_err = 0;

    $email = $_POST['email'];
    $verify_token = md5(rand());

    // Check for collision
    $prep_query = "SELECT email from sublist where email='$email' LIMIT 1";
    $is_subscribed = mysqli_query($con, $prep_query);

    if(mysqli_num_rows($is_subscribed) > 0){
        $_SESSION['email_status'] = $email_exists;
        echo $email_exists;
    }
    else{
        // Insert to table
        $insert_query = "INSERT INTO sublist (email, verify_token) VALUES ('$email', '$verify_token')";
        $insert_query_run = mysqli_query($con, $insert_query);
        
        if($insert_query){
            sendVerifyEmail("$email","$verify_token");
            $_SESSION['status'] = $no_err;
            echo $no_err;
        }
        else{
            $_SESSION['status'] = $error_sending;
            echo $error_sending;
        }
    }
}
?>
