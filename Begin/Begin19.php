<?php

$ab=null;
$ad=null;



if(isset($_GET['ab'])){
    $ab= $_GET['ab'];
}


if(isset($_GET['ad'])){
    $ad= $_GET['ad'];
}


$S=$ab*$ad;
$P=2*($ab+$ad);


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="ab" value="<?php echo $ab ?>">
    <input type="text" name="ad" value="<?php echo $ad ?>">




    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Perimetri: <?php {echo $P; }?> </p>
<p> Yuzi: <?php {echo $S; }?> </p>






</body>
</html>






