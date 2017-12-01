<?php
use ChatRobot;

$token = 'zhugeliange';
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$signature = $_GET["signature"];
$echostr = $_GET["echostr"];

$array = array($token, $timestamp, $nonce);

sort($array);

if (sha1(implode('', $array)) == $signature) {
	echo $echostr;
} else {
	$chatRobot = new ChatRobot\ChatRobot();
	$chatRobot -> chatRobot();
}

exit;