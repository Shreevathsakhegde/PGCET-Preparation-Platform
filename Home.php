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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="notifi">

  <nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-emerald-400 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-20 pt-4 flex space-x-6  justify-end ">
      
             
         <a href="index.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a> 
          
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <a href="logout.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a>
          <!-- <a href="rating.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Review & Rating</li></a> -->
      </ul>
  </nav>
</body>

<body  >
<div  class="bg-sky-500" >
    <nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME To PGCET Preparation Platform</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>

    <h1 class="text-center text-5xl pt-16 text-rose-500 font-serif underline">Please Choose Your Exam</h1>
        <div class="">
    <div class="mx-48  my-28">
        <!-- <h1 class="text-center">Please choose your exam</h1> -->
        <a href="mca.php">
        <img src="mca.png" alt="" class="w-4/12 inline-block ml-16 mr-48 text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 border-4 ">
    </a>
        <a href="mba.php">
        <img src="mba.png" alt="" class="w-4/12 inline-block border-4 "></a>
        <a href="net.php">
        <img src="net.png" alt="" class="w-4/12 inline-block ml-16 mr-48 my-20 border-4 "></a>
        <a href="set.php">
        <img src="set.png" alt="" class="w-4/12 inline-block border-4 "></a>
        <a href="gate.php">
        <img src="gate.png" alt="" class="w-4/12 inline-block ml-16 mr-48 my-10 border-4 "></a>
        <img src="otherexam.png" alt="" class="w-4/12 inline-block border-4 ">
        </div>
    </div>
    </div>
</body>
</html>