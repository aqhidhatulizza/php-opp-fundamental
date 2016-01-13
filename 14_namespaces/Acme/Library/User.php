<?php
namespace Acme\Library;

class User
{

    /**
     * A private property or method is only accesible from the class itself
     */
private $foo;
    /**
     * A protected property or method is accessible only from the class
     * itself AND from it's children classe.
     */
protected $bar;
    /**
     * A public property or method is accessible from anywhere.
     */
public $baz;
    /**
     * Log in user
     * @return string
     */
protected function login(){
    return 'Logging in from User class...';
    }
}
