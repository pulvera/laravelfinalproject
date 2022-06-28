

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD USER</title>
</head>
<body style="background-image: url(image/indexbg.png); background-size: cover;">

<?php

$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"laravel"); 


$_POST[('student_id')]= $_GET[('student_id')];
$_POST[('firstName')]= $_GET[('firstName')];
$_POST[('lastName')]= $_GET[('lastName')];
$_POST[('course')]= $_GET[('course')];
$_POST[('yearLevel')]= $_GET[('yearLevel')];
$_POST[('username')]= $_GET[('username')];
$_POST[('password')]= $_GET[('password')];
$query = mysqli_query($con,"INSERT INTO laravel (student_id,firstName,lastName,course, yearLevel, username, password) VALUES ('$_POST[student_id]','$_POST[firstName]','$_POST[lastName]','$_POST[course]','$_POST[yearLevel]','$_POST[username]','$_POST[password]')");
if(!$query){
    echo "<p style='font-size: 30px; text-align: center;  margin-top: 5%;'>" . "ALERT! USER NOT ADDED" . "</p>"; 
}
else{
    echo "<p style='font-size: 30px; text-align: center;  margin-top: 5%;'>" . "YOU SUCCESSFULLY ADD USER!" . "</p>"; 

}
?>
<a href='http://127.0.0.1:8000/home'><input style="background-color: beige; width: 200px; font-size: 20px; border-radius: 5px; border: 3px solid black;  position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;" type='button' value='GO TO HOME'/></a>;


    
</body>
</html>
