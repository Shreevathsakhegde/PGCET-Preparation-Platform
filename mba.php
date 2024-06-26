<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="gate.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="contain">

  <nav class="bg-black text-white flex justify-between h-16">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-emerald-400 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-20 pt-4 flex space-x-6  justify-end ">
      
             
         <a href="Home.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>
         <!-- <a href="ratingmca.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Rate</li></a> -->
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <!-- <a href="About.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
  </nav>
</body>

    <body class="">
    <nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>
    <div >
        <h1 class="text-7xl text-rose-600  underline font-sans decoration text-center border-l-slate-700">MBA</h1>
        <h1 class="text-4xl italic py-8 pt-28 pl-14 underline decoration-dashed text-blue-600">About MBA :-</h1>
        <p class="text-xl mx-10  pl-20 text-black" >   MBA full form is Master of Business Administration. The MBA course duration is of two years which focuses on delivering managerial abilities, business knowledge, and professional networking skills to graduates. The MBA syllabus and subjects covers conceptual knowledge of finance, marketing, operations, business statistics, etc..</p>
        <br><br><br><br>
        <h1 class="pl-14 text-green-600 text-2xl underline decoration-double">Eligibility Criteria for MBA</h1>
           <p class="text-xl pl-20 text-black"> Aspirants applying for an MBA qualification must have met the eligibility requirements for admission as determined by the institution. MBA eligibility criteria differ according to the institutions. The basic MBA eligibility criteria are listed below:</p> 
            <br>
          <p class="pl-44 text-xl text-black">  >>Applicants must have completed their bachelor's degree in any related discipline with a minimum of 50 % of total marks and above from a recognized university. <br>
            >>Applications who are pursuing the final year of their bachelor's degree are eligible to apply for the course on a provisional basis. <br>
            >>Students must give the appropriate entrance MBA exams for admission.
            
            <br>
        </p>
        <br>

           <p class="pl-24 text-xl text-black">Different types of MBA courses are available in various specializations such as MBA HR, MBA Finance, MBA IT etc. The various types of MBAs are mentioned below:</p>
           <br>
           <p class="pl-44 text-xl text-black">* Executive MBA <br>
            * Distance MBA <br>
            * Online MBA <br>
            * One-Year MBA</p>
           <br>
        <a href="mbapaper.php">
           <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Question-Papers</button></a>
           <<a href="mbasm.php">
           <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Study-Materials</button>
           </a>
            </div>
            <br>
            <br>
            </div>       
        
</body>
</html>