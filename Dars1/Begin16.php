<?php

$a=null;
$b=null;


if(isset($_GET['a'])){
    $a= $_GET['a'];
}

if(isset($_GET['b'])){
    $b= $_GET['b'];
}

$S=abs($a-$b);



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
<h1>Hisoblash</h1>
<p> Masofa: <?php {echo $S; }?> </p>






</body>
</html>





