<?php
$token = "yzd"; // 填写你设置的Token

$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];

$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode( $tmpArr );
$tmpStr = sha1( $tmpStr );

if( $tmpStr == $signature ){
    return true;
}else{
    return false;
}


