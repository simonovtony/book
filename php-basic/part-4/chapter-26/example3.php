<?php

/*
 * HTTP GET
 */
$options = array(
    'http' => array(
        'method' => 'GET',
        'header' => '',
        'content' => ''
    ),
);

$context = stream_context_create($options);
echo file_get_contents('http://php.net', false, $context);

/*
 * HTTP POST
 */
$content = array(
    'foo' => 'bar',
    'bar' => 'baz',
);
$content = http_build_query($content);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n' .
                     'Content-Length: ' . strlen($content),
        'content' => $content,
    ),
);

$context = stream_context_create($options);
echo file_get_contents('http://php.net', false, $context);

/*
 * HTTPS GET
 */

$options = array(
    'http' => array(
        'method' => 'GET',
        'header' => '',
        'content' => ''
    ),
);

$context = stream_context_create($options);
echo file_get_contents('https://secure.php.net', false, $context);

/*
 * HTTPS POST
 */
$content = array(
    'foo' => 'bar',
    'bar' => 'baz',
);
$content = http_build_query($content);

$options = array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/x-www-form-urlencoded\r\n' .
                     'Content-Length: ' . strlen($content),
        'content' => $content,
    ),
);

$context = stream_context_create($options);
echo file_get_contents('https://secure.php.net', false, $context);

/*
 * SSL
 */
$url = 'https://secure.example.com/test/1';
$contextOptions = array(
    'ssl' => array(
        'verify_peer'   => true,
        'cafile'        => __DIR__ . '/cacert.pem',
        'verify_depth'  => 5,
        'CN_match'      => 'secure.example.com'
    )
);
$sslContext = stream_context_create($contextOptions);
$result = file_get_contents($url, NULL, $sslContext);

/*
 * Proxy
 */
$opts = array(
    'http' => array(
        'proxy' => 'tcp://127.0.0.1:8080', 
        'request_fulluri' => true
    )
);
$context = stream_context_create($opts);

$data = file_get_contents('http://www.php.net', false, $context);

echo $data;

?>