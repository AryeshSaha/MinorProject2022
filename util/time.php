<?php

function calcCourseDuration($time)
{
    $days = (int) ($time / (3600 * 2));
    return $days;
}
