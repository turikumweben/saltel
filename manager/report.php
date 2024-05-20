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
<body>
    <form action="#" method="POST">
    <style>
         body{
        background: lavender;
        font-family:monospace;
       }
    </style>
    <center>
    <table border='1'>
    <tr>
    <th>PNAME</th>
    <th>STOKINQUANTITY</th>
    <th>STOCKOUTQUANTITY</th>
    </tr>
    <?php
include "menu.php";
include "../conn.php";
$select="SELECT stock.pname,stockout.quantity FROM stock,stockout WHERE  stock.pid=stockout.pid";
$result=mysqli_query($conn,$select);
while($row=mysqli_fetch_array($result)){
?>
    <tr>
<td><?php echo $row['pname']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['quantity']; ?></td>
</tr>
</tr>
    <?php
}
    ?>
</table>
<br><br><br><br><br>
<h1>GENERAL STOCKIN MONTH REPORT</h1>
<select name="see" >
<?php
include "conn.php";
$month=array('january','february','match','april','may','june','july','august','september','octomber','november','december');
foreach($month as $n) {?>
<option value="<?php echo $n; ?>"><?php echo $n ?> </option>
<?php
}
?>
</select>
<button name="check">CHECK</button><br>
<table border="1">
    <tr>
    <th>id</th>
    <th>pid</th>
    <th>quantity</th>
    <th>quality</th>
    <th>date</th>
    </tr>
<?php
include "../conn.php";
if(isset($_POST['check'])){
    $see=$_POST['see'];
    $select="SELECT * FROM stockin WHERE monthname(date)='$see'";
    $result=mysqli_query($conn,$select);    
    if(mysqli_num_rows($result) ==0){
        echo"NO DATA WE FOUND";
    }
    else{
        while($yes=mysqli_fetch_array($result)){?>
        <tr>
            <td><?php echo $yes['id'];?></td>
            <td><?php echo $yes['pid'];?></td>
            <td><?php echo $yes['quantity'];?></td>
            <td><?php echo $yes['quantity'];?></td>
            <td><?php echo $yes['date'];?></td>
        </tr>
<?php
        }
    }
        }
?>
</table>
<center>
</form>
</body>
</html>
