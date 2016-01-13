<?php
// Require psr-0 autoloader
require 'autoload.php';

//set data and validation rules
$rules = array('email' => 'required|email', 'password' => 'required|min:8');
$data = array('email' => 'joost@tutplus.com', 'password' => '12346789', 'foo' => 'bar');

//Run validation
$validator = new Acme\App \Validator();
if ($validator->validate($data,$rules)== true) {

    $member= new Acme\App\Validator();
    echo $member->login();
    // @administator = new Acme\App\Administrator();
    //echo $administrator->login();
    ($validator->getErrors());
}