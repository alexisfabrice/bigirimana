<?php
session_start();
$conn=mysqli_connect('localhost','root','','xwisdom_tvet');
if (!$conn==true) {
    echo 'database not connected';
}

if (!isset($_SESSION['id'])) {
//    header('location:../index.php');
}

?>