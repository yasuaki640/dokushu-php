<?php
require_once 'Person.php';
require_once 'FriendList.php';

$list = new FriendList();
$list->add(new Person('kyoko', 'fukada'));
$list->add(new Person('mio', 'imada'));
$list->add(new Person('anna', 'takeuchi'));

foreach ($list as $value) {
    print $value->show();
}