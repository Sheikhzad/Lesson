<?php

$S=null;
$P=3.14;

if(isset($_GET['S'])){
    $S= $_GET['S'];
}

$R=sqrt($S/$P);
$d=2*$R;



?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="S" value="<?php echo $S ?>">


    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Radiusi: <?php {echo $R; }?> </p>
<p> Diametri: <?php {echo $d; }?></p>






</body>
</html>




