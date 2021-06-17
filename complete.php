<?php

session_start();

$name = $_SESSION["name"] ?? '';
$mail = $_SESSION["mail"] ?? '';
$inquiry = $_SESSION["inquiry"] ?? '';

$html = file_get_contents('./complete.html');
echo $html;

unset($_SESSION["name"]);
unset($_SESSION["mail"]);
unset($_SESSION["inquiry"]);