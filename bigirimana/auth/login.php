<?php
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
session_start();
if (!isset($_SESSION['id'])) {
// echo 'sessession not still working';
}
if (isset($_POST['submit'])) {
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    $check=mysqli_query($conn,"SELECT * FROM users WHERE username='$uname' AND password='$pass'");
    if (mysqli_num_rows($check) == 1) {
        $fetch=mysqli_fetch_assoc($check)['id'];
        $_SESSION['id']=$fetch;
        header('location:../index.php');
    }
    else{
        echo "<script>alert('username not exists');</script>";
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<style>
    *{
        margin: 0;
        padding: 0;
    }
    
.nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    width: 100%;
    gap: 50px;
  
   background-color:#fff ;

}
.navbar a{
    padding: 19px;
    text-align: center;
    text-decoration: none;
}
.icon{
    width: 140px;
    height: 60px;
    display: flex;
    align-items: center;
    margin-left: 20px;
}
.icon img{
height: 50px;
width: 50px;
font-size: 25px;
border-radius: 20px;
}
.icon span{
    color: blue;
    font-style: italic;
}
.menu{
    width: 100px;
    height: 90px;
    display: flex;
    align-items: center;
    margin-top: 1px;
 
}
.menu img{
    width: 100px;
    height: 85px;


}
.menu ul li{
    background-color: wheat;
    list-style: none;
}
.menu .sub1{
    display: none;
}

.menu ul li:hover .sub1{
    display: block;
    position: absolute;
    margin-top: 17px;
    margin-left: -35px;
    background-color: white;
    width: 100px;
    text-align: center;
    margin-top: 2px;
}
.menu ul li:hover .sub1 ul{
    display: block;
    margin-top: 10px;
    
}
:active,.menu ul li:hover .sub1 li{
    border-radius: 3px;
    color: black;
    
}
    form{
        
        gap: 20px;
        width: fit-content;
        border: 1px solid #fff;
        font-size: larger;
        padding: 20px;
        margin-left: 10%;
        margin-top: 10%;
        color: aliceblue;
        border-radius: 20px;
    }
    body{
background: dodgerblue;
    }
    .name{
        display: flex;
        flex-direction: column;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .container{
      display: flex;
      justify-content: center;
position: absolute;
margin-left: 180px;
top: 35%;
      align-items: center;
    }
    input{
        border-bottom: 1px solid #000;
        border-left: none;
        border-right: none;
        border-top: none;
        outline: none;
        width: 100%;
        background-color: transparent;
    }
    button{
        width: 80%;
        height: 20px;
        text-align: center;
        margin-left: 20px;
        border-radius: 10px;
        outline: none;
        border: none;
    }
    span{
        font-weight: 900;
        font-style: italic;
    }
    
</style>
</head>
<body>
<div class="nav">
    <div class="icon">
<img src="../image/icon.png" alt=""><span>Xwisdom</span>_TVET
    </div>
  
    <img src="./image/auth/wisdom.jpg" alt="">
    <div class="container">
    <div class="text">
<h1><marquee drection="left"><span>XWISDOM</span>_TVET SCHOOL</marquee></h1>
        <p>TVET institutions focus on providing practical skills and knowledge related</br>
         to specific trades, professions, or technical fields.These institutions offer <br>training programs that prepare students for careers in variousindustries <br>
    such as  engineering,  automotive, construction,  hospitality, healthcare, </br> information
     technology, and more.</p>
TVET schools typically offer a variety of programs and courses tailored <br>
to meet the demands of the job market. These programs often include <br>
a mix of theoretical instruction and hands-on training in workshops <br>
or laboratories. The curriculum may cover subjects like technical <br>
skills, industry-specific knowledge, safety regulations, and <br>
practical experience through internships or apprenticeships.
    </div>
<form action="" method="post">
        <label for="">
            username
        </label>
        <input type="text" name="uname" id=""><br><br>
        <label for="">password</label>
        <input type="password" name="pass" id=""><br><br>
        <button type="submit" value="submit" name="submit">login</button>
        create account <a href="./signup.php">Signup</a>
    </form>
</body>
</html>