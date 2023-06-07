<?php

$a = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}

$sum = 0;
if($a){
    $sum = $a + $a +$a + $a;
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
 <label> P = </label>
    <input type="text" name="a" value="<?php echo $a ?>">

    <button type="submit">
        OK
    </button>


</form>


</body>
</html>

