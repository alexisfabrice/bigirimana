<?php
    include_once "./auth/connect.php";
    if (!isset($_SESSION['id'])) {
        // header("location: ./auth/login.php");
    }

    $sql = mysqli_query($conn, "SELECT * FROM trainees");
    $num_rows = mysqli_num_rows($sql);
    $tbody = '';

    if ($num_rows > 0) {
        $a = 0;
        while ($fetch = mysqli_fetch_assoc($sql)){
            $a++;
            $tbody .= '<tr>
            <td>'.$a.'</td>
            
            <td>'.$fetch['firstname'].'</td>
            <td>'.$fetch['lastname'].'</td>
            <td>'.$fetch['gender'].'</td>
            <td><a href="./updatetd.php?id='.$fetch['tnid'].'">update</a></td>
            <td><a href="./deletetd.php?id='.$fetch['tnid'].'">delete</a></td>
            <td><a href="./marks.php?tid='.$fetch['tnid'].'">Import</a></td>
            <td><a href="./.php?signup?id='.$fetch['tnid'].'">trainees</a></td>

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
</head>
<body>
    <a href="./auth/logout.php">logout</a>
    <h1>trade</h1>
    <a href="addproduct.php">Add product</a>
    <!-- <a href="i"></a> -->
    <table border="2">
        <thead>
            <tr>
              
                <th> tnid</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>gender</th>
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