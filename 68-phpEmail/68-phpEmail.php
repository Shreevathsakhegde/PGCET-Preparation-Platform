<?php
    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

    try 
    {
    $mail = new PHPMailer();
    $mail->SMTPDebug = 1;           //Enable verbose debug output      
    $mail->Mailer = "smtp";            
    $mail->isSMTP();               //Send using SMTP                   
    $mail->Host       = 'smtp.gmail.com';   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;        //$mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Host       = "smtp.gmail.com";  //Enable SMTP authentication
    $mail->Username   = "bsccssmi@gmail.com";     //SMTP username
    $mail->Password   = "zqizmahesajloykw";      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 465;
    //TCP port to connect to; use 587
    // if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->AddAddress("himitr@gmail.com", "Mitr");
    $mail->SetFrom("bsccssmi@gmail.com", "BScCs");
    $mail->AddReplyTo("n.bhat@yahoo.com", "Narasimha");
    $mail->AddCC("widluv@gmail.com", "mitr self");
    $mail->Subject = "PHP Email using Gmail SMTP Server";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
    //Recipients
    $mail->setFrom('bsccssmi@gmail.com', 'BScCs');
    $mail->addAddress('himitr@gmail.com');      //Name is optional
    $mail->addAddress('umeshambiger@gmail.com', 'UmeshSir');   //Add a recipient,       
   //Content
    $mail->isHTML(true);                             //Set email format to HTML
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    echo '<h2> Message has been sent <h2>';
  }
  catch(Exception $e) 
    {
     echo "<h3> Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
 ?>   
//https://netcorecloud.com/tutorials/send-an-email-via-gmail-smtp-server-using-php/

