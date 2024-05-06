<?php 


include "./auth/connect.php";
$trainees='';
$trades = '';

$trainee_s = mysqli_query($conn, "SELECT * FROM trainees " );
$trad_e = mysqli_query($conn, "SELECT * FROM trade " );

while( $trainees_fetch = mysqli_fetch_assoc($trainee_s)){
    $trainees .= '<option value="'.$trainees_fetch['tnid'].'">'.$trainees_fetch['firstname'].' '.$trainees_fetch['lastname'].'</option>';
}

while( $trade_fetch = mysqli_fetch_assoc($trad_e)){
    $trades .= '<option value="'.$trade_fetch['tid'].'">'.$trade_fetch['tname'].'</option>';
}
if (isset($_POST['insert'])) {
  $tnid=$_POST['trainee_id'];
  $tid=$_POST['trade_id'];
  $mname=$_POST['mname'];
  $fass=$_POST['fassessment'];
  $sass=$_POST['sassessment'];
  $t_marks=$fass * $sass;
  $sql=mysqli_query($conn,"INSERT INTO marks(`tnid`,`tid`,`modulename`,fomative_assessment,asumative_assessment,total_marks)VALUES('$tnid','$tid','$mname',' $fass','$sass','$t_marks')");
  if ($sql==true) {
    echo 'data inserted';
  }
  else{
    echo 'data  not inserted';
  }

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

    <form action="" method="POST">
        <div>
            <select name="trainee_id" id="">
                <?php echo $trainees; ?>
            </select>
        </div>
        <div>
            <select name="trade_id" id="">
                <?php echo $trades; ?>
            </select>
        </div>
        <div>
        <label for="">Module Name</label>
        <input type="text" name="mname" id="">
        </div>
        <div>
        <label for="">Formative Assessment</label>
        <input type="text" name="fassessment" id="">
        </div>
        <div>
        <label for="">Sumative Assessment</label>
        <input type="text" name="sassessment" id="">
        </div>
        <button name='insert'>Insert</button>
    </form>
    
</body>
</html>