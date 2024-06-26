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
         <!-- <a href="rating.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Rate</li></a> -->
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <!-- <a href="About.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
  </nav>
</body>
<body >

<nav class="bg-fuchsia-200">
<?php

session_start();
echo" <MArquee>  <strong>WELCOME!!!</strong> </MArquee> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>
    <div>
    <h1 class="text-7xl text-green-600  underline font-sans decoration text-center border-l-slate-700">NET</h1>
<h1 class="text-4xl italic py-8 pt-28 pl-14 underline decoration-dashed text-orange-600">About NET :-</h1>
<p class="text-xl mx-10  pl-20 text-black" >  UGC NET or NTA-UGC-NET, is the examination for determining the eligibility for the post of assistant professor and/or Junior Research Fellowship award in Indian universities and colleges. The examination is conducted by National Testing Agency on behalf of University Grants Commission. Until July 2018, the Central Board of Secondary Education (CBSE) conducted the UGC NET exam, which the NTA has been conducting since December 2018. Currently, the exam is being conducted twice a year in the months of June and December in online mode.[2]</p>
<br><br><br><br>
<h1 class="pl-20 text-rose-700 text-2xl underline decoration-double "> Eligibility Criteria for NET</h1><br>
   <p class="text-xl pl-20"> Those who have completed their Master’s degree course are eligible to apply. A candidate of the general category and OBC category should have a minimum of 55%, and Scheduled Caste, Scheduled Tribe and Physically challenged (visually challenged and hearing impaired only), should have minimum 50% in Master’s. Those who are going to appear for the final year test can also apply. Also only those who have done or are pursuing a UGC recognized degree, can apply. The subject of the test should be the subject of post graduation.</p> 
    <br><br>
  
   <br>
   <div class="flex">
<a href="netpaper.php">
   <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Question-Papers</button></a>
   <br><br>
   <a href="netsm.php">
   <button class="btn bg-blue-700 text-white mx-52 h-12 rounded-md px-16">Study-Materials</button></a>
   




</div>

   
    </div>
    <br>
    <br>
    </div>
</body>
</html>