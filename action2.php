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
$s=0;
$n= $_POST['n'];
for ($i=1; $i<=$n; $i++){
    $s=$s+$i;
}
echo "Your answer is : $s";
?>  
</body>
</html>

