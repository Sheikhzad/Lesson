<?php
$a = isset($_POST['a']) ? $_POST['a'] : null;
if ( $a%2 != 0 && $a>100 && $a<1000){
    echo "Berilgan son toq son";
} else {
    "false";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Boolean16</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="a" placeholder="a ni kiriting" value="<?php echo $a ?>">
    <button type="SUBMIT">OK</button>
</form>
</body>
</html>
