<?php

$d = null;
$P = 3.14;
if(isset($_GET['d'])){
    $d = $_GET['d'];
}

$sum = 0;

if($d){
    $sum = $d * $P;
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
    <p> <?php if($d) {echo $sum; }?> </p>
    <label> L = </label>
    <input type="text" name="d" value="<?php echo $d ?>">

    <button type="submit">
        OK
    </button>


</form>


</body>
</html>


