<?php

$a=null;
$b=null;
if(isset($_GET['a'])){
    $a= $_GET['a'];
}
if(isset($_GET['b'])){
    $b= $_GET['b'];
}
$orta_geometrik=sqrt($a*$b);

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
<h1>Orta geometrik topish</h1>
<p> Orta geometrik: <?php {echo $orta_geometrik; }?> </p>



</body>
</html>
