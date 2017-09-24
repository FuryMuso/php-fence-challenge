<?php

$post = 0.1;
$railing = 1.5;

function baseLength($post, $railing)
{
    $baseLength = ($post + $railing + $post);
        return $baseLength;
}

baseLength($post, $railing);

function unit($post, $railing)
{
    $unit = ($railing + $post);
        return $unit;
}

unit($post, $railing);

function fencing($baseLength, $unit)
{
    while ($baseLength <= $baseLength + $unit);
        $unit++;
}

fencing($baseLength, $unit);


?>

<!DOCTYPE html>

<html>
<body>
    <h1></h1>
    <input type="text" name="">
</body>
</html>
