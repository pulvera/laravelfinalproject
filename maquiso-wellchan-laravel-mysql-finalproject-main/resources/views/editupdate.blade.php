<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"loginregister"); 
$_GET['student_id'] = 'student_id';
$query = mysqli_query($con," UPDATE logreg SET student_id = '$_POST[student_id]' ,firstName= '$_POST[firstName]' , lastName= '$_POST[lastName]',
course= '$_POST[course]' ,yearLevel = '$_POST[yearLevel]' ,username = '$_POST[username]' ,password= '$_POST[password]' 
WHERE student_id =".$_GET['id']."");

if(!$query){
	echo "DATABASE IS NOT UPDATED";
}
else{
	echo"DATABASE IS UPDATED";
}
}
echo "<a href=http://127.0.0.1:8000/home><input type='button' value='Back'/></a>";

?>