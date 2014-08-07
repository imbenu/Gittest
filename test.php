<?php
// Authorisation details.
$username = "pradoshe@agileblaze.com";
$hash = "5b1628d0d179abefc95f5fb5c5dc7fd9b6306d1c";

// Configuration variables. Consult http://api.txtlocal.com/docs for more info.
$test = "0";

// Data for text message. This is the text message data.
$sender = "API Test"; // This is who the message appears to be from.
$numbers = "9633199951"; // A single number or a comma-seperated list of numbers
$message = "This is a test message from the PHP API script.";
// 612 chars or less
// A single number or a comma-seperated list of numbers
$message = urlencode($message);
 $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;

$ch = curl_init('http://api.txtlocal.com/send/?');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
echo $result = curl_exec($ch);exit;//print_r($result);exit;
 // This is the result from the API
curl_close($ch);
print_r($result);
?>
