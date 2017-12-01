<?
namespace ChatRobot;

class ChatRobot 
{
	function chatRobot()
	{
		echo "22222";
		// // get post data from client AND transform xml to string
		// $data = simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA']);

		// $toUserName = $data -> ToUserName;
		// $fromUserName = $data -> FromUserName;
		// $createTime = $data -> CreateTime;
		// $msgType = $data -> MsgType;
		// $event = $data -> Event;

		// // judge message type is event or text
		// switch (strtolower($msgType)) {
		// 	case 'event':
		// 		// judge event type is subscribe or others
		// 		switch (strtolower($event)) {
		// 			case 'subscribe':
		// 				$template = "<xml>
		// 		                    <ToUserName><![CDATA[%s]]></ToUserName>
		// 		                    <FromUserName><![CDATA[%s]]></FromUserName>
		// 		                    <CreateTime>%s</CreateTime>
		// 		                    <MsgType><![CDATA[%s]]></MsgType>
		// 		                    <Content><![CDATA[%s]]></Content>
		// 		                    </xml>";

	 //                	$result = sprintf($template, $toUserName, $fromUserName, time(), 'text', '哎呀，欢迎欢迎，热烈欢迎呀~~~');

	 //                	echo $result;

		// 				break;
					
		// 			default:
		// 				break;
		// 		}

		// 		break;
			
		// 	case 'text':
		// 		$template = "<xml>
		//                     <ToUserName><![CDATA[%s]]></ToUserName>
		//                     <FromUserName><![CDATA[%s]]></FromUserName>
		//                     <CreateTime>%s</CreateTime>
		//                     <MsgType><![CDATA[%s]]></MsgType>
		//                     <Content><![CDATA[%s]]></Content>
		//                     </xml>";

	 //        	$result = sprintf($template, $toUserName, $fromUserName, time(), 'text', 'hehe');

	 //        	echo $result;
		// 		break;

		// 	default:
		// 		break;
		}
	}
}
