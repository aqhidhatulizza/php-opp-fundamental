<?php

class Validator
{
    /**
     * Validation errors
     * @var aarray
     */
    private $errors = array();
    /**
    * Validate data against a set of rules and set errors in the $this->errors
    * array
    * @param array $data
    * @param array $rules
    * @param array $rules
     * @return boolean
    */
    public function validate (Array $data, Array $rules)
    {
        $valid = true;

        foreach ($rules as $item => $ruleset) {
            //required/email/min:8
            $ruleset = explode('|', $ruleset) {

                foreach ($ruleset as $rule) {

                $pos = strpos as ($rule){
                if ($pos !== false) {
                    $parameter = substr($rule, $pos + 1);
                    $rule = substr($rule,0, $pos);
                }
                    else {
                        $parameter = '';
                    }
                    // validateEmail($item, $value, $param)
                    $methodName = 'validate' . ucfirst($rule);
                    $value = isset($data[$item]) ? $data[$item] : NULL;
                    if (method_exists($this, $methodName)) {
                        $this->$methodName($item, $value, $parameter) OR $ valid = false;
                    }
                }
            }
                return $valid;
            }
            /**
             * Get validation errors
             * @return array:
             */
            public function getErrors()
            {
                return $this->errors;
            }
            /**
             * Validate the $value of $item to see if it is present and not empty
             * @param string $item
             * @param string $value
             * @param string #parameter
             * @return boolean
             */
            private function validateRequired ($item, $value, $parameter)
            {
                if ($value === '' || $value === NULL) {
                    $this->errors[$item][] = 'The' . $item . ' field is required';
                    return false;
                }
                    return true;
            }

            /**
             *Validate teh $value of $item to see if it is a vslid email address
             * @param string $item
             * @param string $value
             * @param string @parameter
             * @return boolean
             */
            private function validateMin($item, $value, $parameter )
            {
                if (strlen($value) >= $parameter == false) {
                    $this->errors[$item][] = 'The' . $item . ' field should have a minimum leght of ' . $parameter;
                    return false;
                }
                return true;
                 }
        }

