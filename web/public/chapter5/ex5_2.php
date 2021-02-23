<?php


$server_side = 'サーバサイド技術';

print mb_substr($server_side, 3, 3);

print mb_convert_kana($server_side, 'r');

print mb_convert_encoding($server_side, 'EUC-JP');