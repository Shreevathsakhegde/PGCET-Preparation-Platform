<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="gate.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>
<body class="contain">

  <nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-emerald-400 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-20 pt-4 flex space-x-6  justify-end ">
      
             
         <a href="Home.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>
         <!-- <a href="ratingmca.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Rate</li></a>  -->
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <!-- <a href="About.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
  </nav>
</body>

<body>
<nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>    


<div  class="">
    <h1 class="text-7xl text-purple-600  underline font-serif  decoration-solid text-center border-l-slate-700">SET</h1>
    <h1 class="text-4xl italic py-8 pt-28 pl-12 underline decoration-dashed text-pink-600">About SET :-</h1>
    <p class="text-xl mx-10  pl-20" > SET is a university level exam conducted by Symbiosis University, to admit students for UG and Integrated courses programs. Admission will be offered in field of law, management, computer studies, economics, etc. The SET exam is conducted every year in online mode across various cities of the country.</p>
    <br><br><br><br>
    <h1 class="pl-12 text-emerald-500 text-2xl underline decoration-double"> Eligibility Criteria for SET</h1><br>
       <p class="text-xl pl-20 font-serif"> B.Tech: In order to appear for Symbiosis Institute of Technology Engineering Entrance Exam, Candidate should have passed 10+2 from any stream from a recognized board with minimum 45% (40% for SC/ST) Candidates can also apply based on their JEE Mains or Advance Score <br>

        BA/BBA.LLB: Either appearing or passed 12th grade from a recognized board with a minimum of 45% marks <br>
        
        BCA/BCS: Passed 12th or equivalent from a recognized board with a minimum of 50% (45% for reserved category candidates) <br>
        
        B.Sc: Passed out of 12th or equivalent diploma certificate <br>
        
        Bachelors in Designing: To be eligible for SEED (Symbiosis Entrance Exam for Design). Candidate should have Passed either 10+2 or three-year diploma program after 10 <br>
        
        Bachelor's Degree from SIHS and SCON branches do not require SET Exam percentile to be eligible for admission. <br>
        
        </p> 
        <br><br>
      
       <br>
        <div class="flex">
            <a href="setpaper.php">
       <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Question-Papers</button></a>
       <br><br>
       <a href="setsm.php">
       <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Study-Materials</button></a>
    </div>
        </div>
        <br>
        <br>
        </div>
</body>
</html>