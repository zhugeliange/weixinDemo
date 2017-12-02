<?php
namespace ChatRobot;

class ChatRobotClass
{
	function chatRobot()
	{
		// get post data from client AND transform xml to string
		$data =  (array)simplexml_load_string(file_get_contents('php://input'), 'SimpleXMLElement', LIBXML_NOCDATA);

		$toUserName = isset($data['ToUserName']) ? trim($data['ToUserName']) : '';
		$fromUserName = isset($data['FromUserName']) ? trim($data['FromUserName']) : '';
		$createTime = isset($data['CreateTime']) ? trim($data['CreateTime']) : '';
		$msgType = isset($data['MsgType']) ? trim($data['MsgType']) : '';
		$event = isset($data['Event']) ? trim($data['Event']) : '';
		$content = isset($data['Content']) ? trim($data['Content']) : '';
		$msgId = isset($data['MsgId']) ? trim($data['MsgId']) : '';

		// judge message type is event or text
		switch (strtolower($msgType)) {
			case 'event':
				// judge event type is subscribe or others
				switch (strtolower($event)) {
					case 'subscribe':
						$template = "<xml>
				                    <ToUserName><![CDATA[%s]]></ToUserName>
				                    <FromUserName><![CDATA[%s]]></FromUserName>
				                    <CreateTime>%s</CreateTime>
				                    <MsgType><![CDATA[%s]]></MsgType>
				                    <Content><![CDATA[%s]]></Content>
				                    </xml>";

	                	echo sprintf($template, $toUserName, $fromUserName, time(), 'text', '哎呀，欢迎欢迎呀~~~');

						break;
					
					default:
						break;
				}

				break;
			
			case 'text':
				$template = "<xml>
		                    <ToUserName><![CDATA[%s]]></ToUserName>
		                    <FromUserName><![CDATA[%s]]></FromUserName>
		                    <CreateTime>%s</CreateTime>
		                    <MsgType><![CDATA[%s]]></MsgType>
		                    <Content><![CDATA[%s]]></Content>
		                    </xml>";

	        	echo sprintf($template, $toUserName, $fromUserName, time(), 'text', $content);

				break;

			default:
				break;
		}
	}
}
