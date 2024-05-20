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
        
    </style>
    <form action="" method="POST">
    <table border="1">
    <tr>
    <th>id</th>
    <th>username</th>
    <th>email</th>
    <th>password</th>
    <th>role</th>
    <th colspan="2">action</th>
</tr>
<tr>
    <?php
    include "../conn.php";
    $select="SELECT * FROM worker";
    $result=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($result)){
    ?>
<td><?php echo $row['userid'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['role'];?></td>
<td><a href="">DELETE</a></td>
<td><a href="">UPDATE</a></td>

</tr>
<?php
    }
    ?>
</table>
    </form>
    
</body>
</html>