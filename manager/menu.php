
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memu</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        .link{
            border:none;
            background: transparent;
            margin:2rem;
            padding: 6px;
            margin-top:-2rem;
            color:black;
            font-size:17px;
            text-transform:uppercase;
            padding:30px;
            
        }
        .link:hover{
            background: black;
            color:white;
            padding-top:30px;
            padding-bottom:50px;
            padding:30px;
        }
        .logout:hover{
            background: rgba(218, 38, 38, 0.829);
            color:white;
            transition:0.3s;

        }
        
        
    
    </style>
</head>
<body>
<form method="POST">
<div class="header">
    <h1> welcome  Stock mangement system</h1>
    <h3>welcome admin  <?php echo $_SESSION['username']; ?> </h3>


<center>    <div class="nav">
<a class="link" href="homo.php">home</a>
    <a class="link" href="worker.php">user</a>
    <a  class="link" href="viewuser.php">view user</a>
    <a  class="link" href="report.php">report</a>
    <a class="link"  href="../logout.php" class="logout">logout</a>
    </div>
    </center>
</div>
</form>

</body>
</html>