<?php
include 'StopWatch.php';
$time = new StopWatch();
$time->start();
$arr = [];
for ($i = 0; $i < 100000; $i++) {
    array_push($arr, $i);
}
$time->end();
echo "time: ", $time->getElapsedTime();
