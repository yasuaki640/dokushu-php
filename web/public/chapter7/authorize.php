<?php
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('HTTP/1.1 401 Unauthorized');
    header('WWW-Authenticate: Basic realm="SelfPHP"');
    print 'This access is denied.';
    die();
} else {
    if ($_SERVER['PHP_AUTH_USER'] === 'user' && $_SERVER['PHP_AUTH_PW'] === 'pass') {
        print 'Successfully authenticated';
    } else {
        print 'user or password is incorrect.';
    }
}