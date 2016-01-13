<?php
require'user.php';

$joost = new User();
$joost->email = 'joost@tutplus.com';
$joost->password = 'ghv7%Lsv7';

$nick = new User();
$nick->email = 'nick@tutplus.com';
$nick->password = 'ghdhB6Lsv7';
var_dump($nick->login());