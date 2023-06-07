<?php

$A=null;






if(isset($_GET['A'])){
     $A= $_GET['A'];
}




$A2=pow($A,2);
$A4=pow($A,4);
$A8=pow($A,8);


?>

<!doctype html>
<html>
<head>
    <title>Title</title>
</head>
<body>

<form action="" method="GET">

    <input type="text" name="A" value="<?php echo $A ?>">







    <button type="submit">
        OK
    </button>


</form>
<h1>Hisoblash</h1>
<p> A2=: <?php {echo $A2; }?> </p>
<p> A4=: <?php {echo $A4; }?> </p>
<p> A8=: <?php {echo $A8; }?> </p>






</body>
</html>






