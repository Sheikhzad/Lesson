<?php

$A=null;






if(isset($_GET['A'])){
    $A= $_GET['A'];
}




$A2=pow($A,2);
$A3=pow($A,3);
$A5=pow($A,5);
$A10=pow($A,10);
$A15=pow($A,15);



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
<p> A3=: <?php {echo $A3; }?> </p>
<p> A5=: <?php {echo $A5; }?> </p>
<p> A10=: <?php {echo $A10; }?> </p>
<p> A15=: <?php {echo $A15; }?> </p>






</body>
</html>






