<?php
    include_once 'connect.php';

$sql = "select filename from gate";
$result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html>
<head>
    <title>Upload View & Download file in PHP and MySQL | Demo</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="input.css">
    <script src="https://cdn.tailwindcss.com"></script>
   
</head>
<body class="bg-indigo-200 ">
<nav class="bg-black text-white flex justify-between h-16 sticky top-0">
      
      <span class="py-4 pl-10 text-3xl text- transform duration-500 text-white font-serif"> <MArquee> PGCET Preparation Platform </MArquee> </span>
      <ul class="px-10 ml-80 pt-4 flex justify-end space-x-6">
      
             
         <a href="Adminwel.php"> <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Home</li></a>
          <a href="displayuser.php">
          <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif ">User Details</li></a>
          
          <!-- <a href="Notification.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-700 font-serif">Notification</li></a> -->
          <!-- <a href="Registration.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Registration</li></a> -->
          <!-- <a href="Admin.php"> -->
          <!-- <li class="cursor-pointer text-xl hover:text-3xl hover:text-fuchsia-400 transform duration-1000 font-serif">Admin</li></a> -->
      </ul>
  </nav >

<br/>
<div class="container ">
    <div class="row ml-10">
        <div class="col-xs-8 col-xs-offset-2 well ml-96">
        <form action="upload5.php" method="post" enctype="multipart/form-data">
     <button class="text-blue-600 font-bold text-xl underline decoration-dashed">Select File to Upload GATE Question Paper:</button> <br> <br>      
            <div class="form-group">
                <input type="file" name="file1" class="text-pink-600" /><br><br>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload files" class="btn btn-info text-purple-600 italic"/><br>
            </div>
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center bg-cyan-500 mr-64 font-serif decoration-slice">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
    
    <div class="row ml-64">
        <div class="col-xs-8 col-xs-offset-2 ml-1">
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

    </div>
    <div >
        <div class=" flex pt-10 space-x-16">
    <a href="displayuser.php">
    <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-sm rounded-lg  my-2 ml-28 px-14 py-4 font-extralight  font-mono w-fit">user details</button></a>
            <a href="index1.php">
            <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-sm rounded-lg  my-2  px-2 py-4 font-extralight  font-mono w-fit">upload mca question paper</button></a>
            
            <a href="index2.php">
            <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-sm rounded-lg  my-2  px-2 py-4 font-extralight  font-mono w-fit">upload  mba question paper</button></a>
    
                <a href="index3.php">
            <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-sm rounded-lg  my-2  px-2 py-4 font-extralight  font-mono w-fit">upload set question paper</button></a>
            <a href="index4.php">
            <button class="btn text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 text-sm rounded-lg  my-2  px-2 py-4 font-extralight  font-mono w-fit">upload net question paper</button></a>
        </div>
        </div>
</body>
</html>

