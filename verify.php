<?php
$access_token = 'GfXsrQMKtT6R9Ec7mWiosbDdXjbnqGcBN5FtSqMdUVW2KjE+Mp5RW9R7ItaTw8yOzp5NW9WnfM4UC2L63P16xErf2Ef0gwjBxcafyMbXyFtxEmlMOVk7Ii27AY1CibF2iAky6R7HzGgl5HKfaRT/cgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
