<?php
$a1 = isset($_POST['a1']) ? $_POST['a1'] : null;
$a = floor($a1/100);
$b = floor($a1/10)%10;
$c = $a1%10;

echo $a." ";
echo $b." ";
echo $c." ";
if ($a < $b && $b < $c ){
    echo "true";
}
else{
    echo "false";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolean21</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="a1" placeholder="a1 ni kiriting" value="<?php echo $a1 ?>">
    <button type="SUBMIT">OK</button>
</form>
</body>
</html>