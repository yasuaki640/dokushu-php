<?php

//1
//セッションはセッションIDが流れるため、情報が漏洩しないが、Coookieは実データが流れるため、漏洩の危険がある

//2
//session_destroyを使う
//$_SESSIONに空配列を代入する X -> php.iniの設定値をいじる O