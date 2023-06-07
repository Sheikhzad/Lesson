<?php
$sum=0;
$son1=isset($_POST['son1']) ? $_POST['son1']:0;
$son2=isset($_POST['son2']) ? $_POST['son2']:0;
$symbol = isset($_POST['symbol']) ? $_POST['symbol']:0;

if($symbol == 1){
    $sum = $son1 + $son2;
}else
if($symbol == 2){
    $sum = $son1 - $son2;
}else
if($symbol == 3){
    $sum = $son1 * $son2;
}else
if($symbol == 4){
    $sum = $son1 / $son2;
}else {
    $sum = 0;
}
echo "<pre>POST<br>";
var_dump($_POST);
echo "</pre>";

?>
<!doctype html>
<html lang="en">
<head>
    <title>Dars1</title>
</head>
<body>
   <h1>Kalkulyator</h1>

   <form action="index.php" method="post">
    <input type="text" name="son1" value="<?= $son1?>" placeholder="1-son">
    <select>
        <option >+</option>
        <option >-</option>
        <option >*</option>
        <option >/</option>
    </select>
    <input type="text" name="son2" value="<?= $son2?>" placeholder="2-son">
    =
       <?= $sum ?>
       <button type="submit">
         OK
       </button>


    </form>


</body>
</html>