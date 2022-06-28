<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Add User</title>
</head>
<body style="background-image: url(image/bg.jpg);">
    
    <div class ="register">
    <form action="successadd">
    <h1>ADD USER</h1> <br>
    @csrf
    {{ method_field('PUT') }}
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input type="text" name="student_id" id="student_id"  placeholder="Student ID" required> <br> <br>
    <input type="text" name="firstName" id="firstName" placeholder="Firstname" required> <br> <br>
    <input type="text" name="lastName" id="lastName" placeholder="Lastname" required> <br> <br>
    <input type="text" name="course" id="course" placeholder="Course" required> <br> <br>
    <input type="text" name="yearLevel" id="yearLevel" placeholder="YearLevel" required> <br> <br>
    <input type="text" name="username" id="username" placeholder="Username" required> <br> <br>
    <input type="password" name="password" id="password" placeholder="Password" required> <br> <br>
    <br><br>
    <button class="btn_reg">Add</button>   
    </form>
    </div>
    
</body>
</html>