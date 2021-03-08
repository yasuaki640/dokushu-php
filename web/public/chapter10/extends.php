<?php
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('Yasu', 'Aki');
$bp->work();
$bp->show();