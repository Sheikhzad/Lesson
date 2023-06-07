<?php

$a=null;
$b=null;
$c=null;


if(isset($_GET['a'])){
    $a= $_GET['a'];
}

if(isset($_GET['b'])){
    $b= $_GET['b'];
}

if(isset($_GET['c'])){
    $c= $_GET['c'];
}

$S1=abs($c-$a);
$S2=abs($c-$b);
$S=abs($S1-$S2);



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
    <input type="text" name="c" value="<?php echo $c ?>">



    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> A va C masofa: <?php {echo $S1; }?> </p>
<p> B va C masofa: <?php {echo $S2; }?> </p>
<p> Kesma yigindisi: <?php {echo $S; }?> </p>






</body>
</html>






