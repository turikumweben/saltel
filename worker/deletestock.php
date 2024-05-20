<?php
include "../conn.php";
$pid=$_GET['pid'];
$delete="DELETE FROM stock WHERE pid='$pid'";
$result=mysqli_query($conn,$delete);
if($result){
  
    header("location:viewstock.php");
}
else{
    echo"failed to delete";

}
?>