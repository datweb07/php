<?php

function giaiThua($n)
{
    if ($n == 0)
        return 1;

    return $n * giaiThua($n - 1);
}

$n = 5;

echo "{$n}! = " . giaiThua($n);

?>