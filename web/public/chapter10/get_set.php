<?php
require_once 'MyMail.php';

$m = new MyMail();
$m->setTo('aaa');
$m->setSubject('test mail');
$m->setMessage('hi, this is test mail');

$m->From='admin@example.com';
$m->X_Mailer='maier';

$m->send();

