<?php
$ext = pathinfo($_FILES['upfile']['name']);

$perm = ['gif', 'jpg', 'jpeg', 'png'];

if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
    $msg = [
        UPLOAD_ERR_INI_SIZE => 'php.iniのファイルサイズ制限を超えてる',
        UPLOAD_ERR_FORM_SIZE => 'HTMLのMAX_FILE_SIZEを超えています',
        UPLOAD_ERR_PARTIAL => '一部しかアップロードされませんでした',
        UPLOAD_ERR_NO_TMP_DIR => '一次保存フォルダが存在しません',
        UPLOAD_ERR_CANT_WRITE => 'ディスクへの書き込みに失敗しました',
        UPLOAD_ERR_EXTENSION => '拡張モジュールによってアップロードが中断されました'
    ];
    $err_msg = $msg[$_FILES['upfile']['error']];

} elseif (!in_array(strtolower($ext['extension']), $perm)) {
    $err_msg = '画像以外はアップロードできません';
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
    $err_msg = 'ファイルの内容が画像ではありません';
} else {
    $src = $_FILES['upfile']['tmp_name'];
    $dest = $_FILES['upfile']['name'];

    if (!move_uploaded_file($src, 'doc/' . $dest)) {
        $err_msg = 'アップロード処理に失敗しました';
    }
}

if (isset($err_msg)) {
    die($err_msg);
}

header('Location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/file1.php');