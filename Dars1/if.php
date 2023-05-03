<?php

$a=isset($_POST['a']) ? $_POST['a']:0;
$b=isset($_POST['b']) ? $_POST['b']:0;
$c=isset($_POST['c']) ? $_POST['c']:0;

if( $a < $b && $b < $c ) {
    echo 'true';
} else {
    echo 'false';
}
?>

<!doctype html>
<html> <lang="en">
<head>
    <title>Dars1</title>
</head>
<body>
<h1>True or False</h1>

<form method="post">
    <input name="a"  placeholder="1-son" value="<?= $a?>">
    <br>
    <input name="b"  placeholder="2-son" value="<?= $b?>">
    <br>
    <input name="c"  placeholder="3-son" value="<?= $c?>">
    <br>


    <button type="submit">
        OK
    </button>


</form>


</body>
</html>
