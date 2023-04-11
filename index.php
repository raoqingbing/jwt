<?php

require_once 'vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'example_key';
$payload = [
    'iss' => 'http://example.org',
    'aud' => 'http://example.com',
    'iat' => 1356999524,
    'nbf' => 1357000000
];

/**
 * IMPORTANT:
 * You must specify supported algorithms for your application. See
 * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
 * for a list of spec-compliant algorithms.
 */
$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));

print_r($jwt);
echo "<br/>";
print_r($decoded);

//
//$now = time();
//$key = '666'; //key
//$token = array(
//    "uid" => 369,
//    "iss" => "https://ddzd.villalight.cn",//签发组织
//    "aud" => "https://ddzd.villalight.cn", //签发作者
//    "iat" => $now, //签发时间
//    "nbf" => $now,
//    "exp" => $now + 2592000 //过期时间  30天
//);
//echo JWT::encode($token, md5($key) /*jwt的签发密钥，验证token的时候需要用到*/ );
//
////$jwtAuth = json_encode(JWT::decode($jwt, md5($this->config->application->jwtSecret), array('HS256')));
////$authInfo = json_decode($jwtAuth, true);