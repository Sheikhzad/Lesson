<?php

$X=null;






if(isset($_GET['X'])){
    $X= $_GET['X'];
}




$Y=3*pow($X,6)-6*pow($X,2)-7;


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="X" value="<?php echo $X ?>">






    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> Y=: <?php {echo $Y; }?> </p>






</body>
</html>






