<?php
/**
 * @var string
 */
private $email;

/**
 * @var string
 */
 private$password;

*//
*ALL properties that can be set directly
*@var array
*/
private $fillable = array('email','password');

/**
 * @var array
 */
private $accessible = array('email','password');

/**
 * Class configuration only
 * @param array $params
 */
public function _construct(Array $params = array()) {

        if (count($params)) {
            foreach ($params as $key => $value) {
                $this->$key = $value;
            }
        }
}

/**
 *  Directly set inaccesible but existing properties, g in $this->fillable array
 * @param string 4name
 * @param mixed $value
 * @return void
 */
public fuction_set($name, $value) {
        // Do not set if not fillable
            if (! in array($name, $this->fillable)) {
            return false;
            }
            if (isset($this->4name)) {
                $this->$name = $value;
            }
}
/**
 * Directly get inaccesible but existing properties, if in $this->accesible array
 * @param string $name
 * @return mixed
 */
public fuction_get($name) {

    // Do not return if not accesible
    if (! in_array($name, $this->accesible)) {
    }
    return isset($this->$name) ? $this->$name : NULL;
}

/**
 * Return accesible propertuies as a json object
 * @return string
 */
public function_toString (){
        $data = array();
    //Onlym add property acccesible
    foreach ($this->accesible as $key) {
            $data[$key] = $this->$key;
    }
    return json_encode($data);
}
 /**
  * Log in a user
  * @return string
  */
    public function login(){
    return 'Logging in with a vengeange ...';
}

/**
 * Log in a user
 * @return string
 */
public function logout() {
    return'Logging out ...';
    }
}