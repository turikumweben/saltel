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
    <?php
    include "menu.php";
    ?>
</head>
<body>
<style>
        tr:nth-child(even){
            background: whitesmoke;
            padding:10px;


        }
        tr:nth-child(even):hover{
            transition:0.4s;
            background: rgba(191, 221, 236, 0.61);

        }

        table{
            margin:2rem;
            padding:5rem;
            text-transform:capitalize;
        }
        tr:nth-child(odd){
            background: wheat;
        }
        th,td{
            padding:20px;
        }
        
        .del{
            color:black;
            padding:2px;
            border-radius:4px;
            

        }
        .del:hover{
            background: #000;
            color:white;

        }
        body{
        background: lavender;
        font-family:monospace;
       }
    </style>
    <form action="" method="POST">
        <center>
            <h1>current report of aur stock</h1>
    <table>
    <tr>
    <th>pid</th>
    <th>pname</th>
    <th>quantity</th>
    <th>price</th>
    <th colspan="2">action</th>
</tr>
<tr>
    <?php
    include "../conn.php";
    $select="SELECT * FROM stock";
    $result=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($result)){
    ?>
<td><?php echo $row['pid'];?></td>
<td><?php echo $row['pname'];?></td>
<td><?php echo $row['quantity'];?></td>
<td><?php echo $row['price'];?></td>
<td><a href="deletestock.php ?pid=<?php echo $row['pid'];?>">DELETE</a></td>
<td><a href="updatestock.php ?pid=<?php echo $row['pid'];?>">UPDATE</a></td>

</tr>
<?php
    }
    ?>
</table>
</center>
    </form>
    
</body>
</html>