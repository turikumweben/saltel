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
    <title>stockin</title>
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
        <h1>update stock</h1>
<div class="box1">
    <?php
    $pid=$_GET['pid'];
     include "../conn.php";
     $select="SELECT * FROM stock WHERE pid='$pid'";
     $result=mysqli_query($conn,$select);
     while($yes=mysqli_fetch_array($result)){

    ?>
<input type="hidden" name="pid" >
<br><br>
<input type="text" name="pname" placeholder="write your pname here" value="<?php echo $yes['pname'];?>"><br><br>
<input type="text" name="quantity" placeholder="write your quantity here" value="<?php  echo $yes['quantity'];?>"><br><br>
<input type="text" name="price" placeholder="write your quantity here" value="<?php  echo $yes['price'];?>"><br><br>
<input type="submit" name="send" value="send" class="sign">
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
    $pid=$_GET['pid'];
    $pname=$_POST['pname'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $update="UPDATE stock SET pname='$pname',quantity='$quantity',price='$price' WHERE pid='$pid'";
    $result=mysqli_query($conn,$update);
    if($result){
        echo'<script>alert("update well 🎈");window.location.href="viewstock.php";</script>';
    }
    else{
        echo'<script>alert("update failed 🎈");window.location.href="viewstock.php";</script>';
    }
 }

?>