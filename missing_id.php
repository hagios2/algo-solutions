<?php

$k = [3, 0, 1];
$sorted = sort($k);

$missing = null;
$startedAt = 0;

foreach ($k as $id) {
    if ($startedAt !== $id) {
        $missing = $startedAt;
    }

    $startedAt += 1;
}

var_dump($missing);
