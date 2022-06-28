<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
<link rel="stylesheet" href="css/home.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(image/bg.jpg);">

<div class="nav"><h1>USER MANAGEMENT</h1></div>





<?php 
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"laravel"); 
?>

    
    <div>
        <?php
        $query = mysqli_query($con, "SELECT * FROM laravel") or die(mysqli_error());
        
        ?>
    <table border=1>
        <br><br>
        <tr>
            <th>Student ID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Course</th>
            <th>YearLevel</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
            <th>Delete</th>

            

            <?php
            echo"<th>Update</th>"
            ?>

        </tr>
        <?php
        
        while($row = mysqli_fetch_array($query)){
         echo "
         <tr>
            <td>$row[student_id]</td>
            <td>$row[firstName]</td>
            <td>$row[lastName]</td>
            <td>$row[course]</td>
            <td>$row[yearLevel]</td>
            <td>$row[username]</td>
            <td>$row[password]</td>
            <td>$row[status]</td>

            <td align='center'><a style='text-decoration:none; color: red;' href='http://127.0.0.1:8000/delete?id=$row[student_id]'>X</a></td>
            <td align='center'><a style='text-decoration:none;color: blue;' href='http://127.0.0.1:8000/update?id=$row[student_id]'>Update</a></td>
  
         
         </tr>
         ";
            

        }
        
        ?>

        <div>
        <button class="btn-add"><a href="adduser">ADD</a></button>
        <button><a href="http://127.0.0.1:8000/">LOGOUT</a></button>

        </div>
        

    </table>
    </div>


    

    
    
 
    
    

</body>
</html>