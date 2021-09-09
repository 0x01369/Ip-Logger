<?php
$hc_ip = $_SERVER['HTTP_CLIENT_IP'];
$ip = $_SERVER['REMOTE_ADDR'];
$port = $_SERVER['REMOTE_PORT'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$referans = $_SERVER['HTTP_REFERER'];
$protocol = $_SERVER['SERVER_PROTOCOL'];
$http_accept = $_SERVER['HTTP_ACCEPT'];
$http_accept_charset = $_SERVER['HTTP_ACCEPT_CHARSET'];
$http_accept_encoding = $_SERVER['HTTP_ACCEPT_ENCODING'];
$http_accept_languae = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$http_connection = $_SERVER['HTTP_CONNECTION'];$tarih = date('d.m.Y H:i:s');

$kayit = fopen("iplog.txt", "a");
fputs($kayit, "IP: $hc_ip - IP: $ip - PORT: $port - BROWSER: $browser - REFERANS: $referans - PROTOCOL: $protocol - ACCEPT: $http_accept - $http_accept_charset - $http_accept_encoding - http_accept_languae - $http_connection - TARIH: $tarih \n");
fclose($kayit);
?>
