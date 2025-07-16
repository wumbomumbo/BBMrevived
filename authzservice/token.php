<?php
header('Content-Type: application/x-www-form-urlencoded');

// refresh wants :
// access wants , for some reason
// peak

$refreshTokenValue = "fakertoken1:fakertoken2";
$accessTokenValue = "fakeaccesstoken1,idkfaketoken2";

echo 'access_token=' . urlencode($accessTokenValue) . '&';
echo 'token_type=Bearer&';
echo 'expires_in=3600&';
echo 'refresh_token=' . urlencode($refreshTokenValue) . '&';
echo 'scope=urn:bbid:v1:bbmalaska+urn:bbid:v1:sipalaska';