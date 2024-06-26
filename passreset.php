 <?php
session_start();
$Email = $_SESSION['user'];
$E=strval($Email);
$login=false;
$showError=false;
if(isset($_POST["Password"])){
    include 'connect.php';
    // $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $cp=$_POST["CPassword"];
    
if($Password==$cp){
$sql="UPDATE `reg1` SET `Password`='$Password' where Email='$E'";
$result=mysqli_query($con,$sql);
    
     if($result)
    {
        header("location:login.php");

       
    }
     else{
      echo "Email not found";
     }
}
else{
    echo "Password should Match ";
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-pink-300">
<?php
     if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> password changed
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
    <div class="container mt-48 flex mx-auto items-center justify-center">
        <div class="">
            <img class="" src="" alt="">
            <p class=""></p>
        </div>
        <form action="passreset.php" method="post" onsubmit>
        <div class="container flex flex-col bg-white p-8 rounded-xl w-96 text-bold">
        
            <input class="px-4 h-12 my-2 border border-1 outline-blue-600 rounded-lg border-gray-300" type="Password" id="id3"
                placeholder="enter new password" name="Password" onchange="password()" required>
                <label  style="visibility:hidden;"><p id="id4"></p></label>
            <input class="px-4 h-12 my-2 border border-1 outline-blue-600 rounded-lg border-gray-300" type="Password"
                placeholder="reenter password" name="CPassword">
             <input value="submit" type="submit" class="bg-blue-600 hover:bg-orange-800 rounded-lg text-white my-2 py-3 font-bold w-56 mx-10"></input>
         
            <hr class="my-4">
            <!-- <span >New User Then Sign Up></span> -->
          
                
        </div>
        </form> 
        
    </div>
    <script>
     function password()
                {
                    var e=document.getElementById("id3").value;
                    var pa=/^(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}$/;
                    if(pa.test(e))
                    {
                        document.getElementById("id4").style.visibility="visible";
                        document.getElementById("id4").textContent="valid";
                        document.getElementById("id4").style.color="green";
                    }
                    else{
                        document.getElementById("id4").style.visibility="visible";
                        document.getElementById("id4").textContent="Must contain atleast one number,one uppercase and lowercase letter and at least 8 characters";
                        document.getElementById("id4").style.color="red";
                    }
                }
                </script>
   
</body>
</html>