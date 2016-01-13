<?php
namespace Acme\Library;
class User
{
    /**
     * A private property or method is only accessible from the class itself
     */
    private $foo;
    /**
     * A protected property or method is accessible from the class
     * itself AND from it's children class.
     */
protected  $bar;
    /**
     * A public property or method is accessible from anywhere.
     */
public $baz;
    /**
     * Log in user
     * @re
     * protected function login(){
return 'Logging in from User class...';
     }
     }

