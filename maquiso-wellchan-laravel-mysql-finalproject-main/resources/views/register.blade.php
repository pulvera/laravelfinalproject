

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body style="background-image: url(image/indexbg.png); background-size: cover;">

<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"loginregister"); 


$_POST[('student_id')]= $_GET[('student_id')];
$_POST[('firstName')]= $_GET[('firstName')];
$_POST[('lastName')]= $_GET[('lastName')];
$_POST[('course')]= $_GET[('course')];
$_POST[('yearLevel')]= $_GET[('yearLevel')];
$_POST[('username')]= $_GET[('username')];
$_POST[('password')]= $_GET[('password')];
$query = mysqli_query($con,"INSERT INTO logreg (student_id,firstName,lastName,course, yearLevel, username, password) VALUES ('$_POST[student_id]','$_POST[firstName]','$_POST[lastName]','$_POST[course]','$_POST[yearLevel]','$_POST[username]','$_POST[password]')");
if(!$query){
    echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;'>" . "ALERT! STUDENT NOT ADDED" . "</p>"; 
}
else{
    echo "<p style='font-size: 30px; text-align: center; font-family: Roboto; margin-top: 5%;'>" . "STUDENT SUCCESSFULLY ADDED!" . "</p>"; 

}
?>
<a href='http://127.0.0.1:8000/'><input style="background-color: rgb(121, 119, 119);  font-family: Roboto; width: 200px; font-size: 20px; border-radius: 5px; border: 3px solid rgb(250, 243, 243); color: rgb(250, 243, 243); position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;" type='button' value='BACK'/></a>;


    
</body>
</html>
