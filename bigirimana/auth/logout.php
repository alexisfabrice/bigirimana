<?php
include './connect.php';
if (isset($_SESSION['id'])) {
    session_unset();
    session_destroy();
    header("location:./login.php");
}
else{
    echo 'data not';
}
?>