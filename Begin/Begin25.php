<?php

$A=null;
$B=null;
$C=null;






if(isset($_GET['A'])){
    $A= $_GET['A'];
}


if(isset($_GET['B'])){
    $B= $_GET['B'];
}

if(isset($_GET['C'])){
    $C= $_GET['C'];
}


$D=$A;
$A=$C;
$C=$B;
$B=$D;

?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="A" value="<?php echo $A ?>">
    <input type="text" name="B" value="<?php echo $B ?>">
    <input type="text" name="C" value="<?php echo $C ?>">







    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> A: <?php {echo $A; }?> </p>
<p> B: <?php {echo $B; }?> </p>
<p> C: <?php {echo $C; }?> </p>






</body>
</html>






