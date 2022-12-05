<?php session_start();
require_once ("PHPMailer/PHPMailerAutoload.php");
    
if(isset($_POST['services_btn'])){
    $mail = new PHPMailer();
    
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'none';
    $mail->Host = 'mail.megabookwriting.com';
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'info@megabookwriting.com';
    $mail->Password = 'uZ*ufo#C;c8x';

    $mail->setFrom('info@megabookwriting.com', 'INFO');
    $mail->addReplyTo('info@megabookwriting.com', 'INFO');

    $mail->isHTML(true);
    $mail->addAddress('info@megabookwriting.com', 'info@megabookwriting.com');
    $mail->Subject = 'Services form';
    $mail->msgHTML('<html><head></head><body><p class="section-text">Name : '.$_POST["name"].'</p><p class="section-text">Email : '.$_POST["email"].'</p><p class="section-text">Phone : '.$_POST["phoneNumbar"].'</p><p class="section-text">Services : '.$_POST["services"].'</p></body></html>');
    
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {       
        $_SESSION['success'] = '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              <script type="text/javascript">
                setTimeout(function () { 
                  swal("success !","Your message has been sent successfully", "success",{buttons: {text:"Close"},timer: 3000,});
                }, 100);
              </script>';
        header('Location: index.php');
    }
}

if(isset($_POST['contact'])){
    $mail = new PHPMailer();
    
    $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'none';
    $mail->Host = 'mail.megabookwriting.com';
    $mail->Port = 587; // or 587
    $mail->IsHTML(true);
    $mail->Username = 'info@megabookwriting.com';
    $mail->Password = 'uZ*ufo#C;c8x';

    $mail->setFrom('info@megabookwriting.com', 'INFO');
    $mail->addReplyTo('info@megabookwriting.com', 'INFO');

    $mail->isHTML(true);
    $mail->addAddress('info@megabookwriting.com', 'info@megabookwriting.com');
    $mail->Subject = 'Contact form';
    $mail->msgHTML('<html><head></head><body><p class="section-text">Name : '.$_POST["name"].'</p><p class="section-text">Email : '.$_POST["email"].'</p><p class="section-text">Phone : '.$_POST["phoneNumbar"].'</p><p class="section-text">Description : '.$_POST["description"].'</p></body></html>');
    
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } 
    else 
    {       
        $_SESSION['success'] = '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
              <script type="text/javascript">
                setTimeout(function () { 
                  swal("success !","Your message has been sent successfully", "success",{buttons: {text:"Close"},timer: 3000,});
                }, 100);
              </script>';
        header('Location: index.php');
    }
}
?>