
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALL DOCUMENT</title>
    <link rel="stylesheet" href="../style.css">
    <style>
    .link{
            border:none;
            background: transparent;
            margin:3px;
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
    </style>

</head>
<body>
    <form action="" method="POST">
    <div class="header">
    <h1> welcome to Stock management system</h1>
    <h3>welcome  worker <?php echo $_SESSION["username"]; ?> </h3>
</div>
<div class="nav">
<a  class="link" href="homo.php">homo</a>
<a class="link"  href="stock.php">stock</a>
<a class="link"  href="viewstock.php">viewstock</a>
    <a class="link"  href="stockin.php">stockin</a>
    <a class="link"  href="viewstokin.php">viewstockin</a>
    <a class="link"  href="stockout.php">stockout</a>
    <a class="link"  href="viewstockout.php">viewstockout</a>
    <a  class="link" href="../logout.php">logout</a>
</div>  
    </form>
    
</body>
</html>