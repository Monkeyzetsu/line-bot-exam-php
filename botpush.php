<?php



require "vendor/autoload.php";

$access_token = 'jwLZyno7/En8FApWA+ysRYA2iRjHko/bd4gPowmwJ/QNyGaKd6Vji2hK9T4HJm1DMHRz/P04v1d4KUwxdJ2FYBDNnBv4ayJNLAokl11CaNX8U4VmTnjTLH/cfcp6x6zOfOnqgkh66cafbJepJWehwgdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '2df2e439bf8f8e1c5ed0d99b8e2e8710';

$pushID = 'Uf44f0ec8e240311d8700048aff2673c8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world Test');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







