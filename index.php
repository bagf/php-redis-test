<?php
$redis = new Redis();
$redis->connect('127.0.0.1', 6379);

$key = (rand(100, 999) * 0.001) * 1000;
$redis->set($key, (rand(100, 999) * 0.001) * 1000);
$value = $redis->get($key);
$redis->close();

echo $value;