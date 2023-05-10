<?php

$a = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}

$sum = 0;
if($a){
    $sum = $a * $a * $a;
}

$sum = 0;
if($a){
    $sum = $a +$a + $a + $a +$a + $a;
}
?>

<!doctype html>
<html> <lang="en">
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">
    <h1>Yuzini topish</h1>
    <p1> <?php if($a) {echo $sum; }?> </p1>
    <label1> V = </label1>
    <input type="text" name="a" value="<?php echo $a ?>">
    <button type="submit">
        OK
    </button>

    <h2>Tola sirtini topish</h2>
    <p2> <?php if($a) {echo $sum; }?> </p2>
    <label2> S = </label2>
    <input type="text" name="a" value="<?php echo $a ?>">

    <button type="submit">
        OK
    </button>


</form>


</body>
</html>



