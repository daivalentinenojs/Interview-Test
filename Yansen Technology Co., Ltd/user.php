<?php
$file = "http://220.130.161.231:7007/api/v1/user/me";
$data = file_get_contents($file);
$data = mb_substr($data, strpos($data, '{'));
$data = mb_substr($data, 0, -1);
$result = json_decode($data, true);
print_r($result['ResultSet']['Result'][0]);
?>