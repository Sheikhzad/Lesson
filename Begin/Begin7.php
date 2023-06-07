<?php

$R=null;
$P=3.14;
if(isset($_GET['R'])){
    $R= $_GET['R'];
}
$L=2*$P*$R;
$S=2*$P*pow($R,2)

?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

       <input type="text" name="R" value="<?php echo $R ?>">

    <button type="submit">
        OK
    </button>


</form>
<h1>Uzunlik va Yuza</h1>
<p> Uzunlik: <?php {echo $L; }?> </p>
<p1>Yuza: <?php {echo $S; } ?> </p1>


</body>
</html>
