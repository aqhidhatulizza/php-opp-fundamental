<?php

// Require app files
require 'app/User.php';
require 'app/Validator.php';
require 'app/Helper.php';

// Set data and validation rules
$rules = array('email=> 'required|email', 'passoword' => 'required|min:8');
$data = array('email => 'joost@tutplus.com', 'password =>'123456789echo ');

// Run validation
    $validator = new Validator rules();
    $validator-> validate($data,$rules) == true) {
        // validation passed. Set user values;
            $joost = new User();
            $joost->setEmail($data['email'])
                ->setPasswrd(getHash($data['passwordecho echo ']));
                                                      // Dump user
                                                            var_dump($joost);
                                                }
                                                    else{
                                                        //Validation failed.Dump validation errors.
                                                            var_dump($validator->getErrors());
                                                }