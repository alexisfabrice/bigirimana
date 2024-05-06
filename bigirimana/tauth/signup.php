<?php
include './connection.php';
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
$id=$_GET['tid'];
$form='';
$sql=mysqli_query($conn,"SELECT * FROM trade WHERE tid='$id'");
if ($sql==true) {
   $fetch=mysqli_fetch_assoc($sql);
}
if (isset($_POST['signup'])) {
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$check=mysqli_query($conn,"SELECT * FROM trainees WHERE firstname='$fname' AND lastname='$lname'");
if (mysqli_num_rows($check)>0) {
   echo 'username aready exist';
}
else{
   $insert=mysqli_query($conn,"INSERT INTO trainees(firstname,lastname,gender,tid)VALUES('{$fname}','{$lname}','{$gender}','{$id}')");
   if ($insert==true) {
      $select=mysqli_query($conn,"SELECT * FROM trainees WHERE firstname='{$fname}' AND lastname='{$lname}',gender='$gender'");
      $fetch=mysqli_fetch_assoc($check)['tnid'];
      $_SESSION['tnid']=$fetch;
      header('location:../trade.php');

   }
   else{
      echo 'data not inserted';
   }
}
}
$form='
<form action="" method="post">
<label for="">tradename</label><br>
<input type="text" name="fname" id="" value='.$fetch['tname'].'><br><br>
<label for="">firstname</label><br>
<input type="text" name="fname" id=""><br><br>
<label for="">lastname</label><br>
<input type="text" name="lname" id=""><br><br>
<label for="">gender</label><br>
<div>
<input type="radio" name="gender" value="f" id="">female
</div>
<div>
<input type="radio" name="gender" value="m" id="">male
</div>
<div>
<input type="radio" name="gender" value="o" id="">custom
</div>
<button name="signup">submit</button>
</form>
';

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <style>
 
    body{
background: dodgerblue;
    }
    a{
        text-decoration: none;
        color: black;
    }
    form{
      border:1px solid #000;
      height: fit-content;
      width: fit-content;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      padding: 35px;
      border-radius: 10px;

    }
    button{
        width: 60%;
        margin-top: 30px;
        height: 20px;
        text-align: center;
        margin-left: 20px;
        border-radius: 10px;
        outline: none;
        border: none;
    }

   </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
 </head>
 <body>
   <?php echo $form; ?>
 </body>
 </html>