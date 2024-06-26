<?php
$showError1=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
 include 'connect.php';   

$Full_name = $_POST["Full_name"];
$Mobile_number = $_POST["Mobile_number"];
 $Email = $_POST["Email"];
 $Password = $_POST["Password"];
 $conform_password = $_POST["conform_password"];
 $Preferd_exam = $_POST["Preferd_exam"];
 if($Password==$conform_password){
  
 $sql = "INSERT INTO `reg1` (`Full_name`,`Mobile_number`,`Email`, `Password`,`Preferd_exam`) VALUES ('$Full_name','$Mobile_number','$Email','$Password','$Preferd_exam')";
 $result=mysqli_query($con,$sql);
  if($result)
 {
   
    header("location:login.php");
    session_start();
    $_SESSION['user_name']=$Email;
    header("location:regemail.php");

    
 }
 
 else{
   $showError1="Email is already exists";
 }
 


 }
 else{
    $showError="Password do not match";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com"></script>

    <title>Registration</title>
</head>
<body>




    <body class="loginimage">
    <nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-white font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
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
if($showError){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Not Created!!h!password donot match</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true"></span>
  </button>
  </div>';
  }


  if($showError1){
    echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Not Created!!!Email already exists</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true"></span>
  </button>
  </div>';
  }

  ?>
  </nav>

        <div class="container px-4    flex ml-10 mr-64 items-center justify-center">
            
            <div class="left-4 mx-2 mt-8">
            <form action="Registration.php" method="post" onsubmit><br>
          <form>
         <div class="right flex flex-col border-4 font-medium   text-black text-sm p-2 rounded-xl px-8 py-12 -my-5 mx-48 w-1/2 ">
            <input class="px-4 h-12 my-2  border bodrer-2  text-black font-extrabold hover:bg-teal-300 border-blue-300 rounded-lg" type="text" placeholder=" Full name" name="Full_name"required>
            <input class="px-4 h-12 my-2  border  bodrer-2  text-black font-extrabold hover:bg-teal-300 border-black rounded-lg" type="text" id="id1" placeholder="Mobile number" name="Mobile_number" onchange="mobile()" maxlength=10  required>
            <label  style="visibility:hidden;"><p id="id2"></p></label>
            <input class="px-4 h-12 my-2  border  bodrer-2  text-black font-extrabold hover:bg-teal-300 border-blue-300 rounded-lg" type="Email" id="id5" placeholder="Email" name="Email" onchange="email()" required>
            <label  style="visibility:hidden;"><p id="id6"></p></label>
            <input class="px-4 h-12 my-2 border borer-2  text-black font-extrabold hover:bg-emerald-200 border-blue-300 rounded-lg" type="password" id="id3" placeholder="Password" name="Password" onchange="password()" required>
            <label  style="visibility:hidden;"><p id="id4"></p></label>
            <input class="px-4 h-12 my-2 border borer-2  font-extrabold text-black hover:bg-emerald-200 border-blue-300 rounded-lg" type="text" placeholder="Conform password" name="conform_password" required>
            <input class="px-4 h-12 my-2 border borer-2 font-extrabold text-black hover:bg-emerald-200 border-blue-300 rounded-lg" type="text" placeholder="Preferd Exam" name="Preferd_exam" required>
           
            
            
            <a href="Home.php"> 
            
            <button class="btn text-white  bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium  text-sm text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800   my-2 px-36 py-2 rounded-md text-bold border" > SignUp </button> </a>
            
           <hr>
            <hr>
            <div class="text-white mt-6 text-center">
                Already have an account?then
                <div>
                <a class="no-underline border-b border-grey-dark text-grey-dark font-serif text-white text-2xl mr-4" href="login.php">Login </a>
            </div>
            </div>

            </form>
            </form>
            </div>
            <script>
                function mobile()
                {
                    var x=document.getElementById("id1").value;
                    var re=/^[6789][0-9]{9}$/;
                    if(re.test(x))
                    {
                        document.getElementById("id2").style.visibility="visible";
                        document.getElementById("id2").textContent="valid";
                        document.getElementById("id2").style.color="white";

                    }
                    else{
                        document.getElementById("id2").style.visibility="visible";
                        document.getElementById("id2").textContent="invalid mobile-number";
                        document.getElementById("id2").style.color="pink";
                    }
                }
              

                function password()
                {
                    var e=document.getElementById("id3").value;
                    var pa=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
                    if(pa.test(e))
                    {
                        document.getElementById("id4").style.visibility="visible";
                        document.getElementById("id4").textContent="valid";
                        document.getElementById("id4").style.color="white";

                    }
                    else{
                        document.getElementById("id4").style.visibility="visible";
                        document.getElementById("id4").textContent="Must contain atleast one number,one uppercase and lowercase letter and at least 8 characters";
                        document.getElementById("id4").style.color="pink";
                    }
                }
                 

                function email()
                {
                    var e=document.getElementById("id5").value;
                    var em=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                    if(em.test(e))
                    {
                        document.getElementById("id6").style.visibility="visible";
                        document.getElementById("id6").textContent="valid";
                        document.getElementById("id6").style.color="white";

                    }
                    else{
                        document.getElementById("id6").style.visibility="visible";
                        document.getElementById("id6").textContent="You have entered an invalid email address!";
                        document.getElementById("id6").style.color="pink";
                    }
                }

            </script>
</div>
</body>
</html>