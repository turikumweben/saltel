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
    <!-- <link rel="stylesheet" href="style.css"> -->
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
    <?php
    include "menu.php";
    ?>
</head>
<body>
    <form action="" method="POST">
    <center>
    <table  >
    <tr>
    <th>#</th>
    <th>email</th>
    <th>username</th>
    <th>password</th>
    <th>role</th>
    <th colspan="2">action</th>
</tr>
<tr>
    <?php
    include "../conn.php";
    $select="SELECT * FROM user";
    $result=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($result)){
    ?>
<td><?php echo $row['id'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['password'];?></td>
<td><?php echo $row['role'];?></td>
<td><a href="deletuser.php?id=<?php echo $row['id'];?>" class="del">DELETE</a></td>
<td><a href="updateuser.php ?id=<?php echo $row['id'];?>" class="del">UPDATE</a></td>

</tr>
<?php
    }
    ?>
</table>
</center>
    </form>
    
</body>
</html>