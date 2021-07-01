<?php

session_start();

$name = $_SESSION["name"] ?? '';
$mail = $_SESSION["mail"] ?? '';
$inquiry = $_SESSION["inquiry"] ?? '';

// xxx   this it connection test
$dbh = new PDO('mysql:host=localhost;dbname=inquiry', 'iqadmin', 'password');

$quote_name = $dbh->quote($name);
$quote_mail = $dbh->quote($mail);
$quote_inquiry= $dbh->quote($inquiry);
// var_dump($quote_inquiry);

$sql ="INSERT INTO
        inquiries(name, mail, inquiry)
        VALUES($quote_name, $quote_mail, $quote_inquiry);";
// var_dump($sql);exit;

$statement = $dbh->query($sql);
// var_dump($statement);

$html = file_get_contents('./complete.html');
echo $html;

unset($_SESSION["name"]);
unset($_SESSION["mail"]);
unset($_SESSION["inquiry"]);