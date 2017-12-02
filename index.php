<?php
require_once 'chatRobot.php';

$token = 'zhugeliange';
$timestamp = isset($_GET["timestamp"]) ? $_GET["timestamp"] : '';
$nonce = isset($_GET["nonce"]) ? $_GET["nonce"] : '';
$signature = isset($_GET["signature"]) ? $_GET["signature"] : '';
$echostr = isset($_GET["echostr"]) ? $_GET["echostr"] : '';

if ($timestamp && $nonce && $signature && $echostr) {
	$array = array($token, $timestamp, $nonce);

	sort($array);

	echo (sha1(implode('', $array)) == $signature) ? $echostr : '';
} else {
	$chatRobot = new \ChatRobot\ChatRobotClass();
	$chatRobot -> chatRobot();
}

exit();