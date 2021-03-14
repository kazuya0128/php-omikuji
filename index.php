<?php
echo "おみくじアプリを作ります<br>";

$lucky = array('大吉','中吉','小吉','吉',);
$result =$lucky[rand(0,count($lucky)-1)];
echo "あなたの今日の運命は". $result . "です。". PHP_EOL;


?>