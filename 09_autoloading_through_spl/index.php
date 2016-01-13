<?php
// Require app files
require 'app/Helper.php';

//Set data and validation rules
$rules  = array('email' => ' required| email', ' password' => 'required|min:8');
$data = array('email' => 'joost@tutplus.com', 'password => '12346789', 'foo' => 'barecho ');

  // Run validation
$validator = new Validator ();
if ($validator->validate($data,$rules) == true) {

       //Validator passed. Set user values;
           $joost = new User($data);

          $joost->email = 'someotheremail@tutplus.com';
          $joost->password = 'sadfsadfsad';

              //var_dump($joost->email);
              //var_dump($joost->password);

              //Dump user
              //var_dump($joost->password);

          echo $joost;
              }
                  else{
          //validation failed.Dump validation errors.
         var_dump($validator->getErrors());
             }