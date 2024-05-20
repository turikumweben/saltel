<?php
session_start();
if (!$_SESSION['username'])
 {

	header("location:../signin.php");
}
?> 
 <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <?php
    include "menu.php";
    ?>
</head>
<body>
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
<form method="POST">
    <center>
<div class="box1">
    <?php
    include "../conn.php";
   $id=$_GET['id'];
   $select="SELECT * FROM user WHERE id='$id'";
    $result=mysqli_query($conn,$select);
    while ($row=mysqli_fetch_array($result)){
    ?>
<input type="text" name="email" placeholder="write your email here" value=<?php echo $row['email']; ?>><br><br>
<input type="text" name="username" placeholder="write your username here" value=<?php echo $row['username']; ?>><br><br>
<input type="text" name="password" placeholder="write your password here" value=<?php echo $row['password']; ?>><br><br>
<input type="hidden" name="role" placeholder="write your role here" value=<?php echo $row['role']; ?>><br><br>
<input type="submit" name="send" value="update" class="sign">
<?php
    }
?>
</div>
</form>
</center>
</body>
</html>
<?php
include "../conn.php";
if(isset($_POST['send'])){
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];
    $update="UPDATE user SET email='$email',username='$username',password='$password' WHERE id='$id'";
    $res=mysqli_query($conn,$update);
    if($res){
        echo'<script>alert("user update well");window.location.href="viewuser.php";</script>';
    }
    else{
        echo'<script>alert("user update fail");window.location.href="viewuser.php";</script>';
    }
}
?>