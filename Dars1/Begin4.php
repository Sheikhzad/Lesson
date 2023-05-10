<?php

$d = null;
$P = 3.14;
if(isset($_GET['d'])){
    $d = $_GET['d'];
}

 $L=$d*$P
?>

<!doctype html>
<html> <lang="en">
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <label> L = </label>
    <input type="text" name="d" value="<?php echo $d ?>">

    <button type="submit">
        OK
    </button>


</form>
<h1>Uzunlik topish</h1>
<p> <?php {echo $L; }?> </p>


</body>
</html>


