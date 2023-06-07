<?php

$a = null;
$b = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}
if(isset($_GET['b'])){
    $b = $_GET['b'];
}

$s = $a*$b;
$p = 2*($a+$b);



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

<h1>Yuzini aniqlash</h1>
<p1>Yuzi: <?php {echo $s; }?> </p1>
<br>
<p1>Perimetri: <?php {echo $p; }?> </p1>

</body>
</html>



