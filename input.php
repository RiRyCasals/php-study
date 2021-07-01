<?php

include('./module.php');

session_start();

$name = $_SESSION['name'] ?? '';
$mail = $_SESSION['mail'] ?? '';
$inquiry = $_SESSION['inquiry'] ?? '';
$error = boolval($_SESSION['error'] ?? false);
$error_message = '';

if ($error){
    $error_message = 'Some items have not been entered';
    $_SESSION['error'] = false;
}

$html = file_get_contents('./input.html');

$html = str_replace('$$$name$$$', h($name), $html);
$html = str_replace('$$$mail$$$', h($mail), $html);
$html = str_replace('$$$inquiry$$$', h($inquiry), $html);
$html = str_replace('$$$error_massage$$$', h($error_message), $html);

echo $html;