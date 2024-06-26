<?php
 //session_start();
$login=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
include 'connect.php';
$Email=$_POST["Email"];
//$Phone_Number=$_POST["Phone_Number"];
//$Password=$_POST["Password"];
//$Confirm_Password=$_POST["Confirm_Password"];
//$Postal_Address=$_POST["Postal_Address"];

    $sql="Select * from reg1 where Email='$Email'";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login="true";
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['Email']=$Email;
        header("location:68-phpEmail.php");
    }
else{
 $showError="invalid credentials";
}

   

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sendm.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <nav class="bg-white">
<?php
     if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
             </button>
        </div> ';
        }
       
        if($showError){
         echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
             <strong>Error!</strong> '.$showError.'
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true"></span>
             </button>
         </div> ';
         }

      
?>
<body class="contain">

<nav class="bg-black text-white flex justify-between h-16 sticky top-0">
    
    <span class="py-4 pl-10 text-3xl text- transform duration-500 text-emerald-400 font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
    <ul class="px-20 pt-4 flex space-x-6  justify-end ">
    
           
       <a href="login.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Login</li></a> 
        
        <!-- <a href="Notification.php"> -->
        <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
        <!-- <a href="logout.php"> -->
        <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">Log-out</li></a> -->
        <!-- <a href="rating.php">
        <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Review & Rating</li></a> -->
    </ul>
</nav>
</body>






</nav>
<div class="mx-80 mt-56">
<div class="container flex flex-col border border-1 mx-96 bg-pink-300 p-8 rounded-xl w-96 text-bold">
    <form action="68-phpEmail.php" method="POST">
<h2>RESET PASSWORD</h2>
        <input class="px-4 mx-10 h-12 my-2 border border-1 outline-blue-600 rounded-lg border-gray-300" type="email"
            placeholder="Enter Email" name="Email" id="em"><br>
        
           <a href="68-phpEmail.php"><button type="submit" name="resetpass_code"class="bg-orange-600 hover:bg-orange-800 rounded-lg text-white my-2 py-3 font-bold w-56 mx-10">Send Password Reset Link</button></a>
           </form>
        </div>
        </div>
</body> 
</html>