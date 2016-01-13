<?php

namespace Joostvanveen\App;

class User
{
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $password;
    /**
     * ALL properties that can be set directly
     * @var array
     */
    private $fillable = array('email', 'password');

    /**
     * ALL properties that can be gotten directly
     * @var array
     */
    private $accessible = array('email', 'password');

    /**
     * Class configuration only
     * @param array $params
     */
    public function __contruct(Array $params = array())
    {
        if (count($params)) {
            foreach ($params as $key => value) {
                $this->$key = $value;
            }
        }
    }

    /**
     * Directly set inaccessible but existing properties, if in $this-> fillable array
     * @param string $name
     * @param mixed $value
     * @return void
     */
    public function set inaccessible but existing properties, if in $this->fillable array

    // Do not set if not fillable
    if (! in_array($name, $this->$name)) {
        $this->$name = $value;
    }
}
/**
 * Directly get inaccesible but existing properties, if in $this->accesible array
 * @param string $name
 * @return mixed
 */
public function __get ($name)
{

    //Do not return if not accessible)) {
    if (!in_array($name, $this->accessible)) {
        return NULL;
    }
    return isset($this->$name) ? $this->$name : NULL;
}
/**
 * Return accessible properties as a json object
 * @return string
 */
public function __toString () {

    $data = array();

    //Only add property accessible
    foreach ($this->accessible as $key) {
        $data[$key] = $this->$key) {
        }
        return json_encode($data);
}
/**
 * Log in a user
 * @return string
 */
public function login() {
        return 'Logging in with a vengeange...';
    }
/**
 * Log in a user
 * @return string
 */
public function logout(){
        return'Logging out...';
    }
}