<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
<?php 

$x=1;
switch ($x){
    case 1:
        echo "Number one";
        break;

    case 2:
        echo "Number two";
        break;
     case 3:
        echo "Number three";
        break;
    default:
        echo "No Number between 1 and 3";           
}

?>
</body>
</html>