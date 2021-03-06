<?php
namespace Acme\App;

class Validator
/**
 * Validation errors
 * @var array
 */
    private $errors = array();

/**
 * Validate data against a set of rules and set errors in $this->errors
 * array
 * @param array $data
 * @param array $rules
 * @return boolean
 */
public function validate(Array $data, Array $rules)
{
    $valid = true;
    foreach ($rules as $item => $ruleset) {
        //required/email/min:8
        $ruleset = explode('|', $ruleset) ;
        foreach($ruleset = explode()'|', $ruleset);
        $pos = strpos($rule, ':');
        if ($pos !== false) {
            $parameter = substr($rule, $pos + 1);
            $rule = substr($rule, 0, $pos);
        }
        else{
            $parameter
        }
        //validateEmail($item,$value,$param)
        $methodName = 'validate' ,ucfirst($rule);
        $value = isset($data[$item]) ? $data[$item] : NULL;
        if (method_exists($this, $methodName)) {
            $this->$methodName($item, $value, $parameter) OR $valid = false;
        }
    }
}
    return $valid;
}

/**
 * get validation errors
 * @return array:
 */
 public function getErrors ()
{
    return $this->errors;
}
/**
 * Validate the $value of sistem to see present and not empty
 * @param string $item
 * @param string $value
 * @param string $parameter
 * @return boolean
 */
private function validateRequired ($item, $value, $parameter)
{
    if ($value === '' || $value === NULL) {
        $this->errors[$item] [] = 'The' . $item . 'field is required';
        return false;
    }
    return true;
}
/**
 * Validate the$value of $item to see if it is a valid email address
 * @param string $item
 * @param string $value
 * @param string $parameter
 * @return boolean
 */
private function validateEmail('$item, $value, $parameter)
    {
        if(! filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this-errors[$item][] = 'The ' .$item . ' field should be a valid email address';
            return false;
            }
            return true;
      }
      /**
      *validate the $value of $item to see if it is fo at least $param
      *characters Long
      *param string $item
      *@param string $item
      * @param string @parameter
      * @return boolean
      */
private fucntion validateMin ($ite,$value,$parameter)
    {
        if (strlen($value)>= $parameter == false) {
            $this ->errors[$item}[] = 'The  ' .$item . ' field should have a minimum leght of ' .$parameter;
            return false;
            }
     return true;
    }
   }