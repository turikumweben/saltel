<?php
session_start();
if (!$_SESSION['username'])
 {

	header("location:../signin.php");
}
?>
<html lang="en">
    <style>
         body{
        background: lavender;
        font-family:monospace;
       }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <?php
    include "menu.php";
    ?>
</head>
<body>

</body>
</html>