<?php

function scoreChecker(int $score)
{
    if (101 < $score || 0 > $score) {
        throw new Exception();
    }

    if (90 > $score) {
        return 'A';

    } elseif (80 > $score) {
        return 'B';

    } elseif (70 > $score) {
        return 'C';

    } elseif (60 > $score) {
        return 'D';
    }
    return 'F';
}
