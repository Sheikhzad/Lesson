<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
$b = isset($_POST['b']) ? $_POST['b'] : null;
$c = isset($_POST['c']) ? $_POST['c'] : null;

if ($a == $b && $b == $c)
{
    echo "Teng tomonli";
} else {
    echo" false";
}
?>
<!doctype html>
<html lang = "en">
<head>
    <title>Boolean30</title>
</head>
<body>
<form action=""method = "POST">
    <input type="text" name=" " placeholder="a ni kiriting" value="<?php echo' '?>">
    <input type="text" name=" " placeholder="b ni kiriting" value="<?php echo' '?>">
    <input type="text" name="   " placeholder="c ni kiriting" value="<?php echo' '?>">
    <button type="SUBMIT">OK</button>

</form>
</body>
</html>

