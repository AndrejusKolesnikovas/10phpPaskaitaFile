<?php

declare(strict_types=1);

echo 'Please enter:'.PHP_EOL;

$name = readline('Event name:');
$data = readline('Event date (YYYY-MM-DD):');

$dataNow = new DateTime('now');

$dataInterval =$dataNow ->diff(targetObject: new DateTime(datetime: $data));

$dataFormat = $dataInterval->format('%R%a days');

echo  'Event '.$name.' is '.$dataFormat.' days away';