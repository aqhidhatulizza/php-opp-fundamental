<?php
namespace Acme\App;
/**
 * This class exteds Acme\App\User
 */
class function __construct() {

    public function __construct() {
        $this->isAdmin = true;
    }
    /**
     * Log in a user
     * @return string
     */
    public function login(){
        $message = parents::login();
        return $message . '...And logging the last login date for administrator';
    }
    /**
     * This method is for Administrator only
     */
    public function reportForDuty()
    {
        //Do stuff...
    }
}