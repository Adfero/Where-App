<?php
$campfire_url = 'https://YOUR_IDENTIFIER.campfirenow.com';
$campfire_username = 'API_KEY';
$campfire_roomid = 'ROOM_ID';

$ch = curl_init($campfire_url.'/room/'.$campfire_roomid.'/recent.json');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERPWD, $campfire_username.':X');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
             
$result = curl_exec($ch);
curl_close($ch);

header('Content-Type: application/json');
print_r($result);
?>