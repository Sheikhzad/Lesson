<?php

$a = null;
$b = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}
if(isset($_GET['b'])){
    $b = $_GET['b'];
}
$sum = 0;
if($a){
    $sum = $a * $b;
}
$sum = 0;
if($a){
    $sum = ($a + $a) * ($b + $b) ;
}
?>


<!doctype html>
<html> <lang="en">
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">
    <h1>Yuzini aniqlash</h1>
    <p1> <?php if($a) {echo $sum; }?> </p1>
    <p2> <?php if($b) {echo $sum; }?> </p2>
    <label> S = </label>
    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="b" value="<?php echo $b ?>">

    <button type="submit">
        OK
    </button>

    <h2>Perimetrini topish</h2>
    <p3> <?php if($a) {echo $sum; }?> </p3>
    <p4> <?php if($b) {echo $sum; }?> </p4>
    <label> P = </label>
    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="b" value="<?php echo $b ?>">

    <button type="submit">
        OK
    </button>


</form>


</body>
</html>



