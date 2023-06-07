<?php

$a=null;
$b=null;
if(isset($_GET['a'])){
    $a= $_GET['a'];
}
if(isset($_GET['b'])){
    $b= $_GET['b'];
}
$orta_arifmetik=($a+$b)/2;

?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="a" value="<?php echo $a ?>">
    <input type="text" name="b" value="<?php echo $b ?>">

    <button type="submit">
        OK
    </button>


</form>
<h1>Orta arifmetik topish</h1>
<p> Orta arifmetik: <?php {echo $orta_arifmetik; }?> </p>



</body>
</html>
