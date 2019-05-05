<?php

function adder($a, $b) {
    if (!is_int($a) || !is_int($b)) {
        throw new Exception('wrong type');
    }

    return $a + $b;
}
