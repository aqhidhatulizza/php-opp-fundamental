<?php

require 'user.php';

$joost=new User();
$joost->setEmail('joost@tutsplus.com');
$joost->setPassword('12576rhgfsad');

$mike = clone $joost;
$mike->setEmail('mike@tutplus.com');
$mike->setEmail('joost@tutplus.com');

var_dump($joost);
echo '<br/>';
var_dump($mike);
echo'<br/>';