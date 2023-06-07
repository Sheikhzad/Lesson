<?php

$a = null;
$b = null;
$c = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}
if(isset($_GET['b'])){
    $b = $_GET['b'];
}
if(isset($_GET['c'])){
    $c = $_GET['c'];
}

$V=$a*$b*$c;
$S=2*($a*$b+$b*$c+$c*$a)

?>

<!doctype html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">
    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="b" value="<?php echo $b ?>">
    <input type="text" name="c" value="<?php echo $c ?>">

    <button type="submit">
        OK
    </button>


</form>

<h1> Hajm va tola sirt</h1>
<p> Hajmi: <?php {echo $V; }?> </p>
<p1>Tola sirti: <?php {echo $S; }?> </p1>


</body>
</html>


