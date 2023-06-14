<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
$b = isset($_POST['b']) ? $_POST ['b'] : null;
$c = isset($_POST['c']) ? $_POST ['c'] : null;
if($a%2 !=0){
    echo "a soni toq";
}else{
    echo "a soni toq emas";
}
if($b%2 !=0){
    echo "b soni toq";
}else{
    echo "b soni toq emas";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean5</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
    <input type="text" name="b" placeholder="b ni kiriting" value="<?php echo $b ?>">
        <button type="SUBMIT">OK</button>
</form>
</body>
</html>

