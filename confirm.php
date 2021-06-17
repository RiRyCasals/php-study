<?php

include('./module.php');

session_start();

$name = $_POST["name"];
$mail = $_POST["mail"];
$inquiry = $_POST["inquiry"];

if (empty($name) || empty($mail) || empty($inquiry)){
    header('Location: input.php');
}

$html = file_get_contents('./confirm.html');

$html = str_replace('$$$name$$$', h($name), $html);
$html = str_replace('$$$mail$$$', h($mail), $html);
$html = str_replace('$$$inquiry$$$', h($inquiry), $html);

$_SESSION["name"] = $name;
$_SESSION["mail"] = $mail;
$_SESSION["inquiry"] = $inquiry;

echo $html;