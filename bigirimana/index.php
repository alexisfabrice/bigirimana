
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
.text-container span{
    font-style: italic;
    color: rgb(59, 97, 223);
}
.table-container{
    height: 500px;
    width: 100%;
    
    
}

table{
width: 400px;
height: 400px;
border-collapse: collapse;
margin-top: 20px;
margin-left: 90px;

}
table tr td{
    text-align: center;
    color: rgb(1, 1, 1);
    font-weight: 900;
    font-size: 24px;
    border: 2px solid #0c0c0c;
}
table tr th{
    border: 2px solid #0c0c0c;
    text-align: center;
    color: black;
    font-weight: 900;
    font-size: 27px;
}
footer{
    background-color: black;
    justify-content: none;
}
.footer-content{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 70px;
    color: #fff;

}
p{
    color: #fff;
    text-align: center;
}
ul li{
    list-style-type: none;
} 
ul li a{
    list-style: none;
    color: #fff;
    
}



    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
<div class="container">
    <div class="text-container">
        <h1>welcome in <span>Xwisdom</span>_TVET school</h1><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe neque <br>
        amet modi quidem aperiam quos perferendis molestias. Dolor exercitationem <br>
         itaque qui non dignissimos consectetur ad corporis fuga, tempora molestiae <br>
          aperiambr magnam quas culpa, nisi eveniet delectus quidem animi similique <br>dolores  
          voluptatum, reiciendis aut suscipit nihil. Amet, eius fugiat tempora vitae, <br>explicabo ratione
            <a href='read.php'>readmore</a>
         
    </div>
    <div class="table_container">
        <table border="1">
            <tr>
                <th>members</th>
                <th>N <sup>0</sup></th>
            </tr>
            <tr>
                <td>teachers</td>
                <td>23</td>
            </tr>
            <tr>
                <td>students</td>
                <td>144</td>
            </tr>
            <tr>
                <td>header of muster</td>
                <td>1</td>
            </tr>
            <tr>
                <td>header of disprine</td>
                <td>1</td>
            </tr>
            <tr>
                <td>header of studies</td>
                <td>1</td>
            </tr>
            <tr>
                <td>totalM:</td>
                <td>390</td>
            </tr>
           
            
        </table>
    </div>
</div>
   <div class="footer">

   </div><br>
   <footer>
    <div class="footer-content">
        <div class="footer-contact">
            <h2>Contact Us</h2>
            Email: Xwisdom_TVETgmail.com <br>
            Phone: 079-842-7825
        </div>
        <div class="footer-social">
            <h2>Follow Us</h2>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
        </div>
        </div>
    
        <p>&copy; 2024 Xwisdom_TVET SCHOOL. All rights reserved.</p>
   
</footer>
</body>
</html>