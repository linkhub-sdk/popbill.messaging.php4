<?php

require_once 'PopbillMessaging.php';

$LinkID = 'TESTER';
$SecretKey = 'okH3G1/WZ3w1PMjHDLaWdcWIa/dbTX3eGuqMZ5AvnDE=';

$MessagingService = new MessagingService($LinkID,$SecretKey);

$MessagingService->IsTest(true);

$result = $MessagingService->GetUnitCost('1231212312',MessageType_SMS);

var_dump($result);

echo chr(10);
	
$Messages = array();


$Messages[] = array(
	'snd' => '07075106766',
	'rcv' => '11112222',
	'rcvnm' => '수신자성명',
	'msg'	=> '개별 메시지 내용'
);
	
$Messages[] = array(
	'snd' => '07075106766',
	'rcv' => '11112222',
	'rcvnm' => '수신자성명',
	'msg'	=> '개별 메시지 내용'
);
	

$ReserveDT = null; //예약전송시 예약시간 yyyyMMddHHmmss 형식
$UserID = 'userid'; //팝빌 사용자 아이디
	
echo $MessagingService->SendSMS('1231212312','01041680206','내용내용',$Messages,$ReserveDT,$UserID);

echo chr(10);

$ReceiptNum = '014042114000000001';

$result = $MessagingService->GetMessages('1231212312',$ReceiptNum,'userid');

var_dump($result);

echo chr(10);

$result = $MessagingService->CancelReserve('1231212312',$ReceiptNum,'userid');
var_dump($result);

echo chr(10);

$result = $MessagingService->GetURL('1231212312','userid','BOX');

var_dump($result);

echo chr(10);


?>
