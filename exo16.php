<?php
$tab=array(
    array('f1' =>'banane','f2' =>'pomme','f3' =>'ananas','f4' =>'mangue','f5' =>'orange'),
    array('p1' =>'coumba' , 'p2' =>'amsa' , 'p3' =>'awa' ,'p4' =>'mimichou','p5' =>'fatma'),
    array('l1' =>'language C','l2' =>'php' , 'l3' =>'html' ,'l4' =>'python' ,'l5' =>'java script')
);
foreach ($tab as  $element) {
    foreach ($element as  $elt) {
    echo "$elt<br>";
    }

    }
    echo "<a href='decn.php'> deconnexion</a>"
         
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
</body>
</html>