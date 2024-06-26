<?php
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'connect.php';

    $Email=$_POST["Email"];
    $Password=$_POST["Password"];


    $sql="select * from reg1 where Email='$Email' AND Password='$Password'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login="true";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['Email']=$Email;
        $_SESSION['user_name']=$Email;
        header("location:Home.php");
    
    }
    else{
        $showError="invalid credentials";
    }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>

<script>
  function DisableBackButton(){
    window.history.forward(); 
  }
  DisableBackButton();
  window.onload=DisableBackButton;
  window.onpageshow=function(evt){ if(evt.persisted) DisableBackButton()}
  window.onunload = function () { void(0) }

</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="input1.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body  class="sk1">
<nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-fuchsia-500 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-36 pt-4 flex space-x-10  justify-end ">
      
             
         <a href="index.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>
          <a href="About.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">About</li></a>
          <a href="Notification1.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a>
          <!-- <a href="Registration.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Registration</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
</nav>
</div>
<nav class="bg-white">
        <?php
        if($login){
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Successfull!!!Your Account Has Been Created!!!</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"></span>
            </button>
          </div>';
        }
        if($showError){
          echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Not Valid!!! Please Enter valid Email or Password</strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"></span>
        </button>
        </div>';
        }
        ?>

</nav>
        <div class="container px-24  mt-2 flex -ml-16 mr-64 items-center justify-center">
    <form action="login.php" method="post"><br>
            
            <div class="left-4 mx-2- mt-16">
          
         <div class="right flex flex-col bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium text-sm p-8 rounded-xl px-5 py-36 my-2 mx-48 w-1/2">
            <input class="px-4 h-12 my-2  border  bodrer-2 hover:bg-teal-300 border-blue-300 rounded-lg" type="Email" placeholder=" Enter Email-address" name="Email"required>
            <input class="px-4 h-12 my-2 border borer-2 hover:bg-emerald-200 border-blue-300 rounded-lg" type="Password" placeholder="Enter password" name="Password" required>
            <button class="btn text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium  text-sm text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800   my-2 px-2 py-2 rounded-md text-bold border">Log in</button><a href="sendemail.php">
              <span class="text-center  text-white text-sm my-2 ml-20 cursor-pointer">  forgot password</span></a>
            
            <hr>
            <a href="Registration.php">
            <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm my-2 ml-14 px-2 py-2  mx-auto text-bold w-fit">Create New Account</a></button>
        </div>
         </div>
        </form>
        </div>
      </body>

</html>