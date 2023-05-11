<?php

$L=null;
$P=3.14;

if(isset($_GET['L'])){
    $L= $_GET['L'];
}

$R=$L/2*$P;
$S=$P*pow($R,2);



?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="L" value="<?php echo $L ?>">


    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Radiusi: <?php {echo $R; }?> </p>
<p> Yuzi: <?php {echo $S; }?></p>






</body>
</html>



