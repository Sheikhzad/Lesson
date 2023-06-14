<?php
$a = isset($_POST['a']) ? $_POST ['a'] : null;
if ($a%2!=0){
    echo "a soni toq";
}
else{
    echo "a soni juft";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean2-3</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">OK</button>
</form>
</body>
</html>