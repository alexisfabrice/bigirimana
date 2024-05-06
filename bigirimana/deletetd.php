<?php
include './auth/connect.php';
if (isset($_GET['id'])) {
   $id=$_GET['id'];
   $delete=mysqli_query($conn,"DELETE  FROM marks WHERE tid='$id'");
   if ($delete==true) {
    $delete2=mysqli_query($conn,"DELETE FROM trade where tid='$id'");
  header('location:displaytd.php');
   }
}
else{
    header('location:displaytd.php');
}
?>
