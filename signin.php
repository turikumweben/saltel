
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <style>
       
       body{
        background: lavender;
        font-family:monospace;
       }
       .box1{
            width: 400px;
            height:360px;
            background: #f1f1f1;
            border-radius:5px;
            
           
        }
        .box1:hover{
            box-shadow:0px 0px 10px  black;
        }
        input{
            padding:16px;
            width: 370px;
            border:none;
            transition:0.2s;
            border-radius:2px;
            border:1px solid black;
            

        }
        input:hover{
                   background: whitesmoke;
                   border:1px solid  #2c6403dc;
                   transition:0.4s;


        }
        a{
            text-decoration:none;
            color:black;
            font-size:16px;
        }
        a:hover{
            color:#68ca22;
        }
        input:hover::placeholder{
            color:black;
            transition:0.4s;
        }
        h1{
            font-style:italic;
        }
        .sign{
            background: #68ca22;
            color:white;
            font-weight:bold;
            
            transition:0.4s;
        }
        .sign:hover{
            color:white;
            background: #2c6403dc;
            transition:0.4s;
        }
        
    </style>
    
</head>
<body>
    
    <form method="POST">
        <center>
            <br><br><br><br><br>
        <div class="box1">
            <br>
            <h1>SIGNIN</h1>
            <br>

<input type="text" name="username" placeholder="write your username here"  required><br><br>
<input type="password" name="password" placeholder="write your password here" maxlength="20"  required><br><br>
<input type="submit" name="send" value="Sign in" class="sign">
<a href="#"><p>if you dont have account click here</p></a>
</div> 
</center>
    </form>
</body>
</html>

<?php
session_start();
if(isset($_POST['send'])){
include "conn.php";
$username=$_POST['username']; 
$password=$_POST['password']; 
//query to check username
$check_password="SELECT * FROM user WHERE username='$username'";
$execute_check_password=mysqli_query($conn,$check_password);
//if username not exist
if(mysqli_num_rows($execute_check_password)==0){
    echo'<script>alert("account username not exist")</script>';
}
else{ 
    //query to check on password
    $check_password="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $execute_password=mysqli_query($conn,$check_password);
    if(mysqli_num_rows($execute_check_password)==0){
        echo'<script>alert("incorrect password!");</script>';
    }  
}

$select="SELECT * FROM user WHERE username='$username' AND password='$password'";
$ok=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($ok)){
   $role=$row['role'];
}

$row=mysqli_num_rows($ok);
if($row){
    $_SESSION['username']=$username;

    if($role=='admin'){
        echo "<script>alert('welcome in admin dashboard');window.location.href='manager/homo.php';</script>";
    }else{
        echo "<script>alert('welcome in user dashboard');window.location.href='worker/homo.php'</script>";
    }

    

}else{
    echo "<script>alert('incorect cridentios');</script>";
}
}
?>
