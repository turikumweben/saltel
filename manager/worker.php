<?php
session_start();
if (!$_SESSION['username'])
 {

	header("location:../signin.php");
}
?>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT WORKER</title>
    
    <style>
       
       body{
        background: lavender;
        font-family:monospace;
       }
       .field{
            width: 480px;
            height:400px;
            
            background: #f1f1f2;
            border-radius:5px;
            
           
        }
        .box1:hover{
            box-shadow:0px 0px 10px  black;
        }
        input{
            padding:15px;
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
            margin-top:-1.4rem;
            
            transition:0.4s;
        }
        .sign:hover{
            color:white;
            background: #2c6403dc;
            transition:0.4s;
        }
        
    </style>
    <?php
    include "menu.php";
    ?>
</head>
<body>
<center>
    <br>
<fieldset class="field">
    <h1>Insert new user</h1>
    <br><br>
<form method="POST">
    

<input type="text" name="email" placeholder="write your email here"><br><br>
<input type="text" name="username" placeholder="write your username here"><br><br>
<input type="text" name="password" placeholder="write your password here"><br><br>
<input type="hidden" name="role" placeholder="write your role here"><br><br>
<input type="submit" name="send" value="send" class="sign">

</form>
</fieldset>
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
    $insert="INSERT INTO user (username,email,password,role) VALUES ('$username','$email','$password','user')";
    $result=mysqli_query($conn,$insert);
    if($result){
        echo'<script>alert("well inserted")</script>';
    }
    else{
        echo'<script>alert("failed inserted")</script>'; 
    }

}
?>