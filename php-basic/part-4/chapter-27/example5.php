<?php

function mailenc($mail) {
    list ($head, $body) = preg_split("/\r?\n\r?\n/s", $mail, 2);
    $encoding = '';
    $re = '/^Content-type:\s*\S+\s*;\s*charset\s*=\s*(\S+)/mi';
    if (preg_match($re, $head, $p))
        $encoding = $p[1];
    $newhead = "";
    foreach (preg_split('/\r?\n/s', $head) as $line) {
        $line = mailenc_header($line, $encoding);
        $newhead .= "$line\r\n";
    }
    return "$newhead\r\n$body";
}

function mailenc_header($header, $encoding) {
    if (!$encoding)
        return $header;
    $GLOBALS['mail_enc_header_encoding'] = $encoding;
    return preg_replace_callback(
            '/([\x7F-\xFF][^<>\r\n]*)/s', 'mailenc_header_callback', $header
    );
}

function mailenc_header_callback($p) {
    $encoding = $GLOBALS['mail_enc_header_encoding'];
    preg_match('/^(.*?)(\s*)$/s', $p[1], $sp);
    return "=?$encoding?B?" . base64_encode($sp[1]) . "?=" . $sp[2];
}

?>
