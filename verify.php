<?php
// $proxy = 'http://fixie:uJnH2Iy3A5mERc2@velodrome.usefixie.com:80';
// $proxyauth = 'http://fixie:uJnH2Iy3A5mERc2@velodrome.usefixie.com:80';

$access_token = 'y5dQuFSNT2nKdOR7tZRyuivJag56imvnuD33E+6nKDTQQsQnGgW/fp+czUAGLzfD7Gx+tv5kJ+7DfJZHKfQAuS051Uw2f9JaFAJe1+z+AkudSmoR4kIdSXLBk04CALuJAOrFpMpoAD0ET3NibpNBhQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// curl_setopt($ch, CURLOPT_PROXY, $proxy);
// curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
$result = curl_exec($ch);
curl_close($ch);

echo $result;