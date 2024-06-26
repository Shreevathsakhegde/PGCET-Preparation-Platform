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
    <!-- <link rel="stylesheet" href="input.css"> -->
    <link rel="stylesheet" href="input1.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PGCET prepration platform</title>
    

</head>
<body class="contain">

  <nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-white font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-20 pt-4 flex space-x-6  justify-end ">
      
             
         <a href="login.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Login</li></a>
          <a href="About.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">About</li></a>
          <a href="Notification1.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a>
          <a href="Registration.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Registration</li></a>
          <a href="Admin.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a>
          <!-- <a href="rating.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Rating</li></a> -->
      </ul>
  </nav><div> <h1 class="text-rose-200 text-center text-6xl pt-52 font-serif  ">PGCET Preparation Platform</h1>
  


</div>
  </body>
</html>