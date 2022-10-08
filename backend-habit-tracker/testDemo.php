<?php
require __DIR__ . '/vendor/autoload.php';
use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();

echo "Hello Peaches!\n";
sleep(10);
echo "...\n";
sleep(10);
echo "..\n";
sleep(10);
echo ".\n";
sleep(10);
echo "Wakey wakey, eggs and bakey!\n";

$duration = $timer->stop();

var_dump($duration->asString());
var_dump($duration->asSeconds());