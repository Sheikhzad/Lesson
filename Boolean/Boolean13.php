<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
$b = isset($_POST['b']) ? $_POST ['b'] : null;
$c = isset($_POST['c']) ? $_POST ['c'] : null;

if ($a>0 && $b>0 && $c>0){
    echo "hammasi musbat";
}
elseif (($a>0 && $b<0 && $c<0) || ($a<0 && $b>0 && $c<0) || ($a<0 && $b<0 && $c>0) || ($a>0 && $b>0 && $c<0)||($a>0 && $c>0 && $b<0)||
    ($b>0 && $c>0 && $a<0)){
    echo "hech bolmaganda bittasi musbat";
}
else{
    echo "musbat emas";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean13</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
    <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
    <input type="text" name="c" placeholder="c ni kiriting" value="<?php echo $c ?>">
    <button type="SUBMIT">OK</button>
</form>
</body>
</html>