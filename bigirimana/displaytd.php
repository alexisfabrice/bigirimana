<?php
    include_once "./auth/connect.php";
    if (!isset($_SESSION['id'])) {
        // header("location: ./auth/login.php");
    }

    $sql = mysqli_query($conn, "SELECT * FROM trade");
    $num_rows = mysqli_num_rows($sql);
    $tbody = '';

    if ($num_rows > 0) {
        $a = 0;
        while ($fetch = mysqli_fetch_assoc($sql)){
            $a++;
            $tbody .= '<tr>
            <td>'.$a.'</td>
            <td>'.$fetch['tname'].'</td>
            <td><a href="./updatetd.php?id='.$fetch['tid'].'">update</a></td>
            <td><a href="./deletetd.php?id='.$fetch['tid'].'">delete</a></td>
            <td><a href="./marks.php?id='.$fetch['tid'].'">Import</a></td>
            <td><a href="./tauth/signup.php?tid='.$fetch['tid'].'">trainees</a></td>

        </tr>';
        }
    }
    else {
        $tbody .= "<tr><td colspan='4'>no record</td></tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
          body{
            background: dodgerblue;
}
*{
    margin: 0;
    padding: 0;
    text-transform: capitalize;
}

.nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    width: 100%;
    gap: 50px;
    background-color: #fff;
}
.navbar a{
    padding: 19px;
    text-align: center;
    text-decoration: none;
    color: dodgerblue;
    font-weight: 900;
    font-size: larger;

}

.navbar a:hover{
    transition: 1s;
    background-color: chocolate;
    border-radius: 10px;
    height: 30px;
   
    
}
.icon{
    width: 120px;
    height: 60px;
    display: flex;
    align-items: center;
    
}
.icon img{
height: 40px;
width: 40px;
font-size: 25px;
border-radius: 20px;
}
.icon span{
    color: blue;
    font-style: italic;
}
.menu{
    width: 120px;
    height: 60px;
    display: flex;
    align-items: center;
    margin-top: 5px;
}
.menu img{
    width: 40px;
    height: 40px;
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
    height: 95px;
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

.container{
   
    display: flex;
    align-items: center;
    height: 500px;
    color: #0c0c0c;
    font-weight: 900;
    width: 100%;
}
.container h1{
    color: black;
}
.text-container{
    font-size: 20px;
}
        table{
position: fixed;
top: 50%;
left: 50%;
transform: translate(-50%,-50%);
        }
        table,th,tbody,tr,td,thead{
border-collapse: collapse;
padding: 20px;
        }
        table a{
            color: #fff;
            text-decoration: none;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trade</title>
</head>
<body>
    
<div class="nav">
    <div class="icon">
<img src="./image/icon.png" alt=""><span>Xwisdom</span>_TVET
    </div>
    <div class="navbar">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="./trade.php">trade</a>
        <a href="./auth/traineers.php">traineers</a>
        <a href="./displaytd.php">marks</a>
        <a href="#">contact</a>
    </div>

    <div class="menu"><ul> 
        <li><img src="./image/menu.png" alt="">
        <div class="sub1">
        <ul>
            <li>logout</li><br>
            <li>logout</li><br>
            <li> <a href='./Auth/logout.php'>Logout</a></li>
        </ul>
        </div>
    </li>
    </ul>
    </div>
</div>
    <a href="./auth/logout.php">logout</a>
    <h1>trade</h1>
    <!-- <a href="i"></a> -->
    <table border="2">
        <thead>
            <tr>
              
                <th> tid</th>
                <th>Tradename</th>
                <th colspan="4">Action</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
                echo $tbody; 
            ?>
        </tbody>
    </table>
</body>
</html>