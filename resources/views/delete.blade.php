
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Delete</title>
</head>
<body style="background-image: url('image/bg.jpg');">

<?php
//delete.php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"laravel"); 

$query = mysqli_query($con, "DELETE FROM laravel WHERE student_id = '".$_GET['id']."'") or die(mysqli_error());
//$query = mysqli_query($con,"Update student SET status='Deleted' WHERE studID ='".$_GET['id']."'") or die(mysqli_error());

if(!$query){
	echo "<p style='font-size: 30px; text-align: center;  margin-top: 5%;'>" . "RECORD NOT DELETED" . "</p>";
}
else{	
	echo "<p style='font-size: 30px; text-align: center;  margin-top: 5%;'>" . "RECORD SUCCESSFULLY DELETED" . "</p>";
}
?>
<a href='http://127.0.0.1:8000/home'><input style="background-color: beige; width: 200px; font-size: 20px; border-radius: 5px; border: 3px solid black;  position: absolute; left: 45%; top: 40%; padding: 30px; cursor: pointer;" type='button' value='BACK'/></a>;



	
</body>
</html>



