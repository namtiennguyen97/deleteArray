<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
</body>
<?php
function delArray($arr,$x){
$x = $arr[0];
for ($i=0; $i<count($arr);$i++){
if ($x[$i]=== $arr[$x]){
    $x = $arr[$i];
    $arr.array_splice($x,1);
}
} return $arr;
}

$arr = [3,2,4,1];
echo delArray($arr,2);
?>
</html>