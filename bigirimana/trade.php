<?php
include './auth/connect.php';
if (isset($_POST['submit'])) {
   $tname=$_POST['tname'];
   $sql=mysqli_query($conn,"INSERT INTO trade(tname)values('$tname')");
   if ($sql==true) {
   header('location:displaytd.php');
   }
   else{
    echo 'data not';
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trade</title>
    <style>
    form{
        gap: 20px;
        width: fit-content;
        border: 1px solid #fff;
        font-size: larger;
        padding: 20px;
        margin-left: 35%;
        margin-top: 20%;
        color: aliceblue;
        border-radius: 10px;
        
    }
    body{
background: dodgerblue;
    }
    .name{
        display: flex;
        border-radius: 10px;
    }
    a{
        text-decoration: none;
        color: black;
    }
    input{
        outline: none;
        height: 20px;
        background-color: transparent;
        border-bottom: 1px solid #000;
        border-right: 1px solid #000;
        border-top: 1px solid #000;
        border-left: 1px solid #000;
        width: 100%;
    }
    </style>
</head>
<body>
    
    <form action="" method="post">
            <label for="">tradename</label>
            <input type="text" name="tname" id="">
            <button type="submit" value="submit" name="submit">submit</button>
       
    </form>
</body>
</html>