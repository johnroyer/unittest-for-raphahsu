<?php

function convertTime($time = '19:00')
{
    $hour = substr($time, 0, 2);
    $min = substr($time, 3, 2);

    $tag = getTag($hour);
    if ('pm' == $tag) {
        $hour = sprintf("%02d", $hour - 12);
    }

    return "$hour:$min $tag\n";
}

function getTag($hour)
{
    if (12 < $hour) {
        return 'pm';
    }
    return 'am';
}

echo convertTime('18:00');
