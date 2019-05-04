<?php

function adder($a, $b) {
    if (!is_int($a) || !is_int($b)) {
        throw new Excetiob('wrong type');
    }

    return $a + $b;
}
