<?php
include "../conn.php";
$pid=$_GET['id'];
$delete="DELETE FROM stock WHERE pid='$pid'";
$result=mysqli_query($conn,$delete);
if($result){
    $delete1="DELETE FROM stockin WHERE pid='$pid'";
    $resu1=mysqli_query($conn,$delete1);
    if($resu1){
  
    echo'<script>alert("delete well");</script>';
}
else{
    echo"failed to delete";

}
}
?>