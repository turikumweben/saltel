<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<form method="POST">
<center>
 <h1 class="h1">SIGNUP</h1>
<div class="box1">
<input type="text" name="username" placeholder="write your username here"><br><br>
<input type="text" name="email" placeholder="write your email here"><br><br>
<input type="text" name="password" placeholder="write your password here"><br><br>
<input type="submit" name="send" value="signup">
<a href="signin.php"><p>if you have alread have account click here</p></a>
</div> 
</center>
</form>  
</body>
</html>
<?php
include "conn.php";
if(isset($_POST['send'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $insert="INSERT INTO user(username,email,password,role) VALUES('$username','$email','$password')";
    $result=mysqli_query($conn,$insert);
    if($result){
        echo'<script>alert("registration successiful");</script>';
    }
    else{
        echo'<script>alert("registration failed");</script>';
    }
}
?>