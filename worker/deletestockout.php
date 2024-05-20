<?php
include "../conn.php";
$id=$_GET['id'];
$delete="DELETE FROM stockin WHERE id='$id'";
$result=mysqli_query($conn,$delete);
if($result){
  $delete2="DELETE FROM stockout WHERE id='$id'";
  $result1=mysqli_query($conn,$delete2);
if ($result1) {
    echo"success";


}
else{
    echo"failed to delete";

}
}
?>