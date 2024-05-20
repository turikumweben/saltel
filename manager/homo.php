<?php
session_start();
if (!$_SESSION['username'])
 {

	header("location:../signin.php");
}
?>
<html>
<head>
    <style>
         body{
        background: lavender;
        font-family:monospace;
       }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    
    
    <?php
  
    include "menu.php";
    ?>
</head>
<body>


</body>
</html>