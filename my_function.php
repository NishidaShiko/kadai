<?php

function numToDouble(int $i)
{
    $ret = $i * 2;
    
    return $ret;
}

$num = numToDouble(10);
echo "10 を2倍にしたら {$num} になった \n";

function numAdd(int $a, int $b)
{
    $ret = $a + $b;
    
    return $ret;
}

$add = numadd(5, 6);
echo "5 と 6を足したら {$add} になった \n";