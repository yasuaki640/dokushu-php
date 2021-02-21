<?php

$language = 'JavaScript';

$server_side = ['PHP', 'JSP', 'ASP'];
$client_side = ['JavaScript', 'VBScript'];

if (in_array($language, $server_side, true)) {
    print 'サーバサイド技術';
} else if(in_array($language, $client_side, true)){
    print 'クライアントサイド技術';
}