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

$sum = 0;
if($a){
    $sum = $a * $b * $c;
}
$sum = 0;
if($a){
    $sum = ($a + $a;
}
?>

<!doctype html>
<html> <lang="en">
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">
    <h1>Perimetrini topish</h1>
    <p> <?php if($a) {echo $sum; }?> </p>
    <label> S = </label>
    <input type="text" name="a" value="<?php echo $a ?>">

    <button type="submit">
        OK
    </button>


</form>


</body>
</html>


