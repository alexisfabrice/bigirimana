<?php
 include_once "./auth/connect.php";
 if (!isset($_SESSION['id'])) {
    //  header("location: ./auth/login.php");
 }
$id=$_GET['id'];
$form='';
$select=mysqli_query($conn,"SELECT * FROM trade WHERE tid='$id'");
if ($select==true) {
  $fetch=mysqli_fetch_assoc($select);
$form ='
<form action="" method="post">
<label for="">tradename</label>
<input type="text" name="tname" id="" value='.$fetch['tname'].'>
<button type="submit" value="submit" name="submit" >submit</button>

</form>
';
if (isset($_POST['submit'])) {
$tname=$_POST['tname'];
$update=mysqli_query($conn,"UPDATE trade SET tname='$tname' WHERE tid='$id'");
if ($update==true) {
    header('location:displaytd.php');
}
else{
    echo 'data not updated';
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php echo $form ?>
</body>
</html>