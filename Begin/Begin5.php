<?php

$a = null;
if(isset($_GET['a'])){
    $a = $_GET['a'];
}

$V=pow($a,3);

$S=6*$a;
?>

<!doctype html>
<html> <lang="en">
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

        <input type="text" name="a" value="<?php echo $a ?>">
    <button type="submit">
        OK
    </button>




</form>

<h1>Hajm va tola sirt</h1>
<p1> Hajm: <?php {echo $V; }?> </p1>
<br>
<p2>Tola sirti: <?php {echo $S; } ?> </p2>


</body>
</html>



