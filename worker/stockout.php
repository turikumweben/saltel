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
        <h1>stockout</h1>
<div class="box1">
<input type="hidden" name="id">
<select name="pid">
    <option hidden>---chosse productname----</option>
        <?php
        include "../conn.php";
        $select="SELECT * FROM stock";
        $result=mysqli_query($conn,$select);
        while($row=mysqli_fetch_array($result)){
        ?>
    <option>
    <?php echo $row['pid'];?>
        <?php echo $row['pname'];?>
    </option>
    <?php
        }
        ?>
</select>
<br><br>
<input type="text" name="quantity" placeholder="write your quantity here"><br><br>
<input type="text" name="quality" placeholder="write your quality here"><br><br>
<input type="date" name="date" placeholder="write your date here"><br><br>
<input type="submit" name="send" value="send" class="sign">
</div>
</form>
</center>
    
</body>
</html>
<?php
include "../conn.php";
if(isset($_POST['send'])){
$pid=$_POST['pid'];
 $quantity=$_POST['quantity'];
 $quality=$_POST['quality'];
 $date=$_POST['date'];
 $check="SELECT * FROM stock WHERE pid='$pid'";
 $a=mysqli_query($conn,$check);
 while($real=mysqli_fetch_array($a))
{
	$quantit=$real['quantity'];}
$new=$quantit-$quantity;
$update="UPDATE stock SET quantity='$new' where pid='$pid'";
$a=mysqli_query($conn,$update);
$insert="INSERT INTO stockout (pid,quantity,quality,date) VALUES('$pid','$quantity','$quality','$date')";
 $result=mysqli_query($conn,$insert);
 if($insert){
    echo'<script>alert("🎈stockout alread adde👌👌");</script>';
 }
 else{
    echo'<script>alert("stokout failed to add");</script>';
 }
}
?>

