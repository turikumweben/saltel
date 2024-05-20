<?php
include "../conn.php";
$id=$_GET['id'];
$delete="DELETE FROM user WHERE id='$id'";
$result=mysqli_query($conn,$delete);
if($result){
  
    echo'<script>alert("delete well");window.location.href="viewuser.php"</script>';
}
else{
    echo"failed to delete";

}
?>