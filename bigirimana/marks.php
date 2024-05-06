<?php
include_once "./auth/connect.php";

// if (!isset($_GET['id'])) {
//     // header("location: ./index.php");
// }

// $id = $_GET['id'];
// $select2 = mysqli_query($conn, "SELECT * FROM trainees WHERE tnid='$id'");
// if ($select2) {
//     $fetch = mysqli_fetch_assoc($select2);
//     $form = '';
// }

$tid = $_GET['tid'];

$form = '';

$select = mysqli_query($conn, "SELECT * FROM trainees WHERE `tid` = '{$tid}'");
$fetch = mysqli_fetch_assoc($select);

$form = '
    <form action="" method="POST">
    <div class="" >
    <label for="pname">id</label></br>
    <input type="text" name="tid" value = "' . $tid . '" disabled>
</div>
<div class="" >
<label for="pname">traineesid</label></br>
<input type="text" name="tnid" value = "' . $fetch['tnid'] . '" disabled>
</div>

           
                <div class="">
                    <label for="pname">modulename</label></br>
                    <input type="text" name="mname">
                </div>
                <div class="">
                    <label for="pname">fomative assessment</label></br>
                    <input type="number" name="fassessment">
                </div>
                <div class="">
                    <label for="pname">summative assessment</label></br>
                    <input type="number" name="sassessment">
                </div>
                <input type="submit" name="submit" value="add product">
            </form>';


if (isset($_POST['submit'])) {
    $tid=$_GET['tid'];
    $mname = $_POST['mname'];
    $sassessment = $_POST['sassessment'];
    $fassessment = $_POST['fassessment'];
    $total_marks = $fassessment * $sassessment;
    $sql = mysqli_query($conn, "INSERT INTO marks(`tid`,`modulename`,`fomative_assessment`,`asumative_assessment`,`total_marks`) 
                                VALUE ('$tid','$mname','$fassessment','$sassessment','$total_marks') ");
    if ($sql == true) {
        echo "marks inserted <a href='./viewimport.php'>View Imports</a>";
    } else {
        echo "not inserted";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marks</title>
</head>

<body>
    <h1>marks</h1>
    <?php echo $form; ?>
</body>

</html>