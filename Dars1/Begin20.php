<?php

$X1=null;
$X2=null;
$Y1=null;
$Y2=null;




if(isset($_GET['X1'])){
    $X1= $_GET['X1'];
}


if(isset($_GET['X2'])){
    $X2= $_GET['X2'];
}

if(isset($_GET['Y1'])){
    $Y1= $_GET['Y1'];
}

if(isset($_GET['Y2'])){
    $Y2= $_GET['Y2'];
}

$S=sqrt(pow($X2-$X1,2)+pow($Y2-$Y1,2));


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="X1" value="<?php echo $X1 ?>">
    <input type="text" name="X2" value="<?php echo $X2 ?>">
    <input type="text" name="Y1" value="<?php echo $Y1 ?>">
    <input type="text" name="Y2" value="<?php echo $Y2 ?>">





    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Yuzi: <?php {echo $S; }?> </p>






</body>
</html>






