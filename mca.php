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



<script>
  function DisableBackButton(){
    window.history.forward(); 
  }
  DisableBackButton();
  window.onload=DisableBackButton;
  window.onpageshow=function(evt){ if(evt.persisted) DisableBackButton()}
  window.onunload = function () { void(0) }

</script>




  <nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-emerald-400 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-20 pt-4 flex space-x-6  justify-end ">
      
             
         <a href="Home.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>

          <!-- <a href="ratingmca.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Rate</li></a> -->
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <!-- <a href="logout.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
  </nav>
</body>
<body class="">
<nav class="bg-fuchsia-200">
<?php
// if(isset($_SESSION['user_name']))
// {
session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];

// }
// else {
//     echo "<script>alert('login'),location.href='login.php';</script>";
// }
?></nav>



    <div>
<h1 class="text-7xl text-blue-700  underline font-sans decoration text-center border-l-slate-700">MCA</h1>
<h1 class="text-4xl italic py-8 pt-28 pl-14 underline decoration-dashed text-pink-600">About MCA :-</h1>
<p class="text-xl mx-10  pl-20 text-black" >   Master of Computer Applications (MCA) is a two year professional post-graduate programme for candidates wanting to delve deeper into the world of computer application development with the help of learning modern programming language. The programme is a blend of both theoretical and practical knowledge. An MCA degree endows students’ an opportunity  to work with tools meant to develop better and faster applications.</p>
<br><br><br><br><br>
<h1 class="pl-14 text-yellow-500 text-3xl underline decoration-double">Eligibility Criteria for MCA</h1><br>
   <p class="text-xl pl-20 text-black"> -MCA eligibility criteria requires students to graduate in computer applications, computer science, or related field with a minimum of 50% marks obtained at the UG level. Therefore, the student must have a basic knowledge of computer science and its applications. In addition, aspirants must have had mathematics as a core subject in the 10+2 or Bachelor.</p> 
    <br><br>
    <p class="pl-20 text-xl text-black" >Listed below are some of the job roles that an MCA degree graduate can join as a fresher:</p>
  <p class="pl-44 text-xl  text-black">  * Software Developer <br>
    * Programmer  <br>
    * System Engineer <br>
    * System Analyst <br>
    * System Administrator <br>
    * Troubleshooter <br>
    * Software Application Architect <br>
    * Web Designer and Developer  <br>
    * Software Consultant  <br>
    * Technical Writer <br>
    <br>
</p>
   <!-- <p class="text-xl pl-20"> The average salary package of a fresher in this field is Rs. 3 lakh to Rs. 5 lakh per annum. However, packages depend on the coding and other IT skills of an individual. Highly skilled candidates can also bag salary packages worth Rs. 9.3 lakh per annum. Salary grows exponentially according to the experience of the candidate.</p> -->
   <br>
   <br>
<a href="mcapaper.php">
   <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16 space-x-8">Question-Papers</button></a>
  <a href="mcasm.php">
   <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Study-Materials</button></a>

   </div>
    </div>
    <br>
    <br>
            
</body>
</html>