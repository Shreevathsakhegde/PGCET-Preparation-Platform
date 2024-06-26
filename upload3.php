<?php
//if(isset($_POST['Full_name']))
$server = "localhost";
$Email = "root";
$password = "";
$dbName = "registration1";


$con = mysqli_connect($server,$Email,$password,$dbName);
 if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
 }



 $result = mysqli_query($con, $sql);
 //check if form is submitted
 if (isset($_POST['submit']))
 {
     $filename = $_FILES['file1']['name'];
 
     //upload file
     if($filename != '')
     {
         $ext = pathinfo($filename, PATHINFO_EXTENSION);
         $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
     
         //check if file type is valid
         if (in_array($ext, $allowed))
         {
             // get last record id
             $sql = 'select max(id) as id from net';
             $result = mysqli_query($con, $sql);
             if (count($result) > 0)
             {
                 $row = mysqli_fetch_array($result);
                 $filename = ($row['id']+1) . '-' . $filename;
             }
             else
                 $filename = '1' . '-' . $filename;
 
             //set target directory
             $path = 'uploadnet/';
                 
             $created = @date('Y-m-d H:i:s');
             move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
             
             // insert file details into database
             $sql = "INSERT INTO net(filename, created) VALUES('$filename', '$created')";
             mysqli_query($con, $sql);
             header("Location: index3.php?st=success");
         }
         else
         {
             header("Location: index3.php?st=error");
         }
     }
     else
         header("Location: index3.php");
 }
 ?>