<?php

$msg = 'お問い合わせはCWASFAEF4654@nifity.comまで';
$mail_pattern = '/[a-z0-9\.\-]+@([a-z0-9\-]+\.)+[a-z0-9\-]+/i';

print preg_replace($mail_pattern, '<a href="mailto:$0">$0</a>', $msg);