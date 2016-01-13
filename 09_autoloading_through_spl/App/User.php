<?php
class User{
    /**
    * @var string
    */
    private $email;
    /**
     * @var strin
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
    private $accesible = array('email', 'password');
    /**
     * Class configuration only
     * @param array $params
     */
    public fuction__ construct(Array $params = array()) {

        if (count($prams)) {
            foreach ($params as $key=> $ value) {
        $this->$key = $value;
            }
        }
    }
/**
 * Directly  set inaccessible but existing properties, if in $this->fillable array
 * @param string $name
 * @param mixed $value
 * @return void
 */
public function__set ($name, $value) {
    // Do not set if not fillable
    if (! in_array($name, $this->fillable)) {
    return false:
    }
if (isset ($this->$name)) {
    // Do not return if not accesible
    if (! in_array($name,$ this->accesible)) {
        return NULL;
    }
    return isset($this->$name) ? $this->$name : NULL;
}
/**
 * Return accesible properties as a json object
 * @return string
 */
public function__to string () {
    $data = array();
// Only add property accesible
foreach ($this->accessible as $key) {
    $data[$key] = $this->$key;
    }
}
return json _encode($data);
}
/**
 * Log in a user
 * @return string
 */
public function login()
{
    return 'Logging in with a vengeange...';
}
/**
 * Log in a user
 * @return string
 */
public function logout(){
    return 'Logging out...';
}

