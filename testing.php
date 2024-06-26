<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>PGCET</title>
</head>

<style>
    body{
        background-color:lightpink;
    }
    
    
    button{
border:15px solid orange;
margin:10px;
font-style:italic;
font-weight:bold;
padding:5px;
   }
  table{
    margin-left: 400px;
  }

   
</style>
<h2>Upload Question Papers:</h2>
<body >
 

        <!-- <span class="text-3xl flex items-center mx-6 font-bold">Competitive Career</span> -->
        
        <ul class="px-20 py-4 flex space-x-20 justify-end items-center ">
            
           <a href="index1.php"><button class="cursor-pointer hover:text-sm transform duration-700 hover:text-grey-600  text-lg">upload mca question paper</button></a>
            <a href="index2.php"><button class="cursor-pointer hover:text-sm transform duration-700 hover:text-grey-600 text-lg">upload mba question paper</button></a>
           <a href="index3.php"> <button class="cursor-pointer hover:text-sm transform duration-700  hover:text-grey-600 text-lg">upload net question paper</button></a>
            
            <a href="index4.php"><button class="cursor-pointer hover:text-sm transform duration-700  hover:text-grey-600 text-lg">upload set question paper</button></a>

            <a href="index5.php"><button class="cursor-pointer hover:text-sm transform duration-700  hover:text-grey-600 text-lg">upload gate question paper</button></a>
            <!-- <a href="admin.php"><li class="cursor-pointer hover:text-sm transform duration-700 hover:text-orange-600  text-lg">Admin login</li></a> -->
        </ul>
    </nav>
    <hr><hr>
  <table  border="6" >
    <tr>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Mobile Number</th>
        <th>Preferd_Exam</th>
       
    </tr>

    
    <?php

include("connect.php");
$sql="SELECT * from reg1 where Preferd_exam like 'mc%'";

$data=mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
$sql1="select * from reg1";
 $result=mysqli_query($con,$sql1);
 $num=mysqli_num_rows($result);
// //echo $num;


// //echo $num;
echo " <h2>Total Registers Found In The Database:$num</h2>&nbsp &nbsp &nbsp &nbsp";














 $sql2="SELECT * from reg1 where Preferd_exam like 'mc%'";
 $result1=mysqli_query($con,$sql2);

$num=mysqli_num_rows($result1);
echo " <h2>MCA Registers Found In The Database:$num</h2>";



$sql3="SELECT * from reg1 where Preferd_exam like 'mb%'";
$result=mysqli_query($con,$sql3);

$num=mysqli_num_rows($result);
echo " <h2>MBA Registers Found In The Database:$num</h2>";


$sql4="SELECT * from reg1 where Preferd_exam like 'se%'";
$result=mysqli_query($con,$sql4);

$num=mysqli_num_rows($result);
echo " <h2>SET Registers Found In The Database:$num</h2>";



$sql5="SELECT * from reg1 where Preferd_exam like 'ne%'";
$result=mysqli_query($con,$sql5);

$num=mysqli_num_rows($result);
echo " <h2>NET Registers Found In The Database:$num</h2>";



$sql6="SELECT * from reg1 where Preferd_exam like 'ga%'";
$result=mysqli_query($con,$sql6);

$num=mysqli_num_rows($result);
echo " <h2>GATE Registers Found In The Database:$num</h2>";
?>


<hr>
<hr>








    <?php

    


 $sql2="SELECT * from reg1 where Preferd_exam like 'mc%'";
 $result1=mysqli_query($con,$sql2);

$num=mysqli_num_rows($result1);
echo " <h2>MCA Registers Found In The Database:$num</h2>";
echo " <h2> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp Registers Found In The Database For MCA:</h2>";
 if($total!=0)
{
    $result1=mysqli_fetch_assoc($data);
    while($result1=mysqli_fetch_assoc($data))
    
    {
        echo "
        <tr>
      <td>&nbsp &nbsp &nbsp &nbsp &nbsp".$result1['Full_name']."</td>
        <td>&nbsp &nbsp &nbsp &nbsp &nbsp".$result1['Email']."</td>
        <td>&nbsp &nbsp &nbsp &nbsp &nbsp".$result1['Mobile_number']."</td>
        <td>&nbsp &nbsp &nbsp &nbsp &nbsp".$result1['Preferd_exam']."</td>    
      </tr>";
    }
}


 else{
    echo "<h3>records not found</h3>"; }
    

?>

</table>
 </body>
 </html>