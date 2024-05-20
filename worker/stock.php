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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
include"menu.php";
?>
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
<form action="#" method="POST">
<center>
<div class="box1">
<input type="text" name="pname" placeholder="write your product here"><br><br>
<input type="text" name="quantity" placeholder="write your quantity here"><br><br>
<input type="text" name="price" placeholder="write your price here"><br><br>
<input type="submit" name="send" value="send" class="sign">
</div>
</form>
</center>
</form>
</body>
</html>
<?php
include "../conn.php";
if(isset($_POST['send'])){
    $pname=$_POST['pname'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $insert="INSERT INTO stock(pname,quantity,price) VALUES ('$pname','$quantity','$price')";
    $result=mysqli_query($conn,$insert);
    if($result){
        echo'<script>alert("well stock added");</script>';
    }
    else{
        echo'<script>alert("well stock failed");</script>';
    }
}
?>