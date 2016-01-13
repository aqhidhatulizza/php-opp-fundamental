<?php

// REQUIRE PSR-0 AUTOLOADER
require 'autoload.php';

//Set data and validation rules
$rules = array('email' => 'required|email', 'password'=> 'required|min:8');
$data = array('email' => 'joost@tutplus.com', 'password' => '12346789', 'foo'=> 'bar');

//Run validation
$validator = new Joostvanveen\App\Validator();
if ($validator->validate($data,$rules) == true) {

    //Create a User in the global namespace
    $joost = new Joostvanveen\App\User($data);
    var_dump($joost);

    //Create a User in the Library namespace
    $nick = new Joostvanveen\Library\User();
    var_dump($nick);
}
else {
    // Validation failed.Dump validation errors.
    var_dump($validator->getErrors());
}