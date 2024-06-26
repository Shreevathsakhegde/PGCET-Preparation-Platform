<?php
    //Import PHPMailer classes into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';


    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    
        include 'connect.php';
       
    //    $Email=$_POST["Email"];
       session_start();
        $Email=$_SESSION['user_name'];
    //    $sql="SELECT * from `reg1` where Email='$Email'";
    //    $result=mysqli_query($con,$sql);
    //   $num=mysqli_num_rows($result);
    //   if($num==1){
    //       $login="true";
    //       $_SESSION['loggedin']=true;
    //       $_SESSION['Email']=$Email;
      
    

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
    $mail->Username   = "vathsakhegde@gmail.com";     //SMTP username
    $mail->Password   = "lferohtkjdfpepnq";      //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     //Enable implicit TLS encryption
    $mail->Port       = 465;
    //TCP port to connect to; use 587
    // if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->AddAddress("$Email", "Me");
    $mail->SetFrom("vathsakhegde@gmail.com", "SK Hegde");
    $mail->AddReplyTo("$Email", "Narasimha");
    $mail->AddCC("$Email", "mitr self");
    $mail->Subject = "Welcome To PGCET Preparation Platform";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
    //Recipients
    $mail->setFrom('vathsakhegde@gmail.com', 'SK Hegde');
    $mail->addAddress("$Email");      //Name is optional
    $mail->addAddress("$Email", 'UmeshSir');   //Add a recipient,       
   //Content
    $mail->isHTML(true);                             //Set email format to HTML
    $mail->Body    = 'Hurray ' . $Email . ' You Have Registered Successfully </b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script> alert(' Welcome To PGCET Prepartion Platform '),location.href='login.php';</script>";

    echo '<h2> Message has been sent ,Please Open Your Gmail And Press Link TO Reset Your Password <h2>';
  }
  catch(Exception $e) 
  {
   echo "<h3> Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
// }

//   }
 ?>   


