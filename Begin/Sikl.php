<?php
$n = isset($_GET['n']) ? $_GET['n'] : null;

$sum = 0;
if($n){
    for($i = $n; $i > 0; $i = intval($i/10)){
        $sum += ($i % 10);
    }
}
echo "Sum=".$sum;
?>

<!doctype html>
<html lang="en">
<head>
    <title>FOR</title>
</head>
<body>
<h1>Hisoblash</h1>

<form action="" method="GET">
    <input type="text" name="n">
       <button class="submit">
        OK
    </button>


</form>


</body>
</html>
