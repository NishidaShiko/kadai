<?php
$a = 0;
$b = 1;
$c;

echo "{$a}\n";
echo "{$b}\n";

while($b < 10000){
    $c = $a + $b;
    $a = $b;
    $b = $c;
    echo "{$b}";
    echo "\n";
}

