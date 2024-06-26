<?php
    include_once 'connect.php';

$sql = "select filename from gate";
$result = mysqli_query($con, $sql);
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
<body>

<nav class="bg-fuchsia-200">
<?php

session_start();
echo"  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<strong>WELCOME!!!</strong> <br>   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp   "
.$_SESSION['user_name'];


?></nav>

<form action="upload5.php" method="post" enctype="multipart/form-data">
    <div class="bg-pink-200 pb-4">
<div class="ml-24 ">
     
    <h1 class="text-5xl ml-96 decoration-dashed"><MArquee> GATE Exam Question Papers</MArquee></h1></div></div>
    <div class="bg-fuchsia-300 ">
<div class="row ml-80 mt-2">
        <div class="col-xs-8 col-xs-offset-2 ml-24">
            <table class="table table-striped table-hover ">
                <thead class="">
                    <tr class="">
                        <th class=" pr-36   text-red-400">id</th>
                        <th class=" pr-32  text-red-400">File Name</th>
                        <th class=" pr-36 text-red-400">View</th>
                        <th class=" pr-36 text-red-400">Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td class="underline text-blue-500 pb-6"><br><a href="uploadgate/<?php echo $row['filename']; ?>" target="_blank">View</a></td>
                    <td class="underline  text-blue-500 "><a href="uploadgate/<?php echo $row['filename']; ?>" download>Download</td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
            
        </div>


    </div></div></div>
  
</body>
</html>