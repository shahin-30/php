<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $n= $_POST['n']; 
    if ($n%2==0){
        echo "$n is even number";
    }
    else{
        echo "$n is odd number";
    }
?>  
</body>
</html>