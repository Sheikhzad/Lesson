<?php

$R1=null;
$R2=null;
$P=3.14;

if(isset($_GET['R1'])){
    $R1= $_GET['R1'];
}
if(isset($_GET['R2'])){
    $R2= $_GET['R2'];
}

$S1=$P*pow($R1,2);
$S2=$P*pow($R2,2);
$S=$S1-$S2;


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="R1" value="<?php echo $R1 ?>">
    <input type="text" name="R2" value="<?php echo $R2 ?>">

    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Yuzi: <?php {echo $S1; }?> </p>
<p> Yuzi: <?php {echo $S2; }?></p>
<p> Ayirmasi: <?php {echo $S; }?></p>





</body>
</html>


