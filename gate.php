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
<body>
    <div class="">
    <nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>

    <h1 class="text-7xl text-fuchsia-600 underline font-serif  decoration-solid text-center border-l-slate-700">GATE</h1>
    <h1 class="text-4xl italic py-8 pt-28 pl-14 underline decoration-dashed text-sky-700">About GATE :-</h1>
    <p class="text-xl mx-10  pl-20" > The Graduate Aptitude Test in Engineering (GATE) is an examination conducted in India that primarily tests the comprehensive understanding of various undergraduate subjects in engineering and science for admission into the Masters Program and Job in Public Sector Companies. GATE is conducted jointly by the Indian Institute of Science and seven Indian Institutes of Technologies at Roorkee, Delhi, Guwahati, Kanpur, Kharagpur, Chennai (Madras) and Mumbai (Bombay) on behalf of the National Coordination Board – GATE, Department of Higher Education, Ministry of Education (MoE), Government of India.</p>
    <br><br><br><br>
    <h1 class="pl-20 text-rose-600 text-2xl underline decoration-double"> Eligibility Criteria for GATE</h1><br>
       <p class="text-xl pl-20">  * Bachelor's degree holders in Engineering / Technology / Architecture (3 years after 10+2/ 10+2+3(ongoing)/ 10+2+4(ongoing)/ Post-B.Sc./ Post-Diploma) and those who are in the final year of such programs ( Also prefinal year of B.tech). <br>
       * Master's degree holders in any branch of Science/Mathematics/Statistics/Computer Applications or equivalent and those who are in the final year of such programs. <br>
       * Candidates in the second or higher year of Four-year integrated master's degree programs (Post-B.Sc.) in Engineering / Technology. <br>
       * Candidates in the fourth or higher year of Five-year integrated master's degree programs or Dual Degree programs in Engineering / Technology. <br>
       * Candidates with qualifications obtained through examinations conducted by professional societies recognized by UGC/AICTE (e.g. AMIE by IE(India), AMICE by the Institute of Civil Engineers (India)-ICE(I), AMIETE By IETE(India)) as equivalent to B.E./B.Tech. <br>
       * A candidate who is currently studying in the 3rd or higher years of any undergraduate degree program OR has already completed any government approved degree program in <br>
       * Engineering / Technology / Architecture / Science / Commerce / Arts is eligible to appear for GATE 2022 examination. Those who have completed section A or equivalent of such professional courses are also eligible.
        <br>
        </p> 
        <br><br>
      
       <br>
    <a href="gatepaper.php">
       <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16 space-x-12">Question-Papers</button></a>
       
       <a href="gatesm.php">
       <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16 ">Study-Materials</button>
       </a>
        </div>
        <br>
        <br>
        </div>
</body>
</html>