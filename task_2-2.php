<?php

function discriminant($a, $b, $c) {
    $disc = $b**2 - 4*$a*$c;
    return $disc;
}

echo discriminant(3, -14, -5);
