<?php

$a=null;
$b=null;
if(isset($_GET['a'])){
    $a= $_GET['a'];
}
if(isset($_GET['b'])){
    $b= $_GET['b'];
}
$N1_soni=pow($a,2);
$N2_soni=$a*$b;
$N3_soni=$a+$b;
$N4_soni=pow($b,2)

?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="b" value="<?php echo $b ?>">

    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Yigindi: <?php {echo $N3_soni; }?> </p>
<p> Kopaytma: <?php {echo $N2_soni; }?></p>
<p> a kvadrat: <?php {echo $N1_soni; }?></p>
<p> b kvadrat: <?php {echo $N4_soni; }?></p>




</body>
</html>
