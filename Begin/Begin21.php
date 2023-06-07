<?php

$AB=null;
$BC=null;
$AC=null;





if(isset($_GET['AB'])){
    $AB= $_GET['AB'];
}


if(isset($_GET['BC'])){
    $BC= $_GET['BC'];
}

if(isset($_GET['AC'])){
    $AC= $_GET['AC'];
}

$P=($AB+$BC+$AC)/2;
$S=sqrt($P*($P-$AB)*($P-$BC)*($P-$AC));


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="AB" value="<?php echo $AB ?>">
    <input type="text" name="BC" value="<?php echo $BC ?>">
    <input type="text" name="AC" value="<?php echo $AC ?>">






    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Yuzi: <?php {echo $S; }?> </p>
<p> Perimetri: <?php {echo $P; }?> </p>






</body>
</html>






